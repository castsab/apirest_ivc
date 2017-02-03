<?php

namespace console\controllers;

use yii\console\Controller;
use backend\modules\api\controllers\EstablishmentController;
use backend\models\Establishment;

class MigrationEstablishmentController extends Controller
{
    public function actionIndex(){
        
        ini_set('memory_limit', '512M');
        ini_set('upload_max_filesize', '200M');
        ini_set('post_max_size', '300M');
        ini_set('max_execution_time', '3200');
        
        $establishmentController = new EstablishmentController($id='', $module='');
        $arrayDatos = '';
        
        $pathFilename = \Yii::getAlias('@console/base/establecimientosCamaraComercioTest.xlsx');
        $objPHPExcel = $this->getObjectIOFactory($pathFilename);
        $sheet = $objPHPExcel->getSheet(0);
        $sheet = $objPHPExcel->getActiveSheet();
        
        for ($file = 2; $file <= $sheet->getHighestRow(); $file++) {
            $NRO_MAT_ESTABLE = trim($sheet->getCellByColumnAndRow(2, $file)->getValue());
            $NRO_ID_PROP = trim($sheet->getCellByColumnAndRow(3, $file)->getValue());
            $NRO_MAT_PROP = trim($sheet->getCellByColumnAndRow(4, $file)->getValue());
            $T_ID_PROP = trim($sheet->getCellByColumnAndRow(5, $file)->getValue());
            $REPLEGAL_SUC = trim($sheet->getCellByColumnAndRow(6, $file)->getValue());
            $T_ID_REPLEGAL_SUC = trim($sheet->getCellByColumnAndRow(7, $file)->getValue());
            $NRO_ID_REPLEGAL_SUC = trim($sheet->getCellByColumnAndRow(8, $file)->getValue());
            $FEC_MAT_ESTABLE = trim($sheet->getCellByColumnAndRow(9, $file)->getValue());
            $RAZON_SOCIAL_ESTABLE = trim($sheet->getCellByColumnAndRow(10, $file)->getValue());
            $DIR_COM_ESTABLE = trim($sheet->getCellByColumnAndRow(11, $file)->getValue());
            $COD_MUN_ESTABLE = trim($sheet->getCellByColumnAndRow(12, $file)->getValue());
            $TELEFONO_ESTABLE = trim($sheet->getCellByColumnAndRow(13, $file)->getValue());
            $F_ULTIMA_RENOVA = trim($sheet->getCellByColumnAndRow(14, $file)->getValue());
            $BARRIO = trim($sheet->getCellByColumnAndRow(15, $file)->getValue());
            
            $arrayDatos = [
                "upz" => "",
                "lastname_owner" => "",
                "lastname_legal_representative" => "",
                "ciiu1" => "",
                "ciiu2" => "",
                "ciiu3" => "",
                "address_commercial" => trim($DIR_COM_ESTABLE),
                "address_standard" => "",
                "address_notification" => "",
                "date_end_commercial_registration" => "",
                "date_commercial_registration" => trim($FEC_MAT_ESTABLE),
                "formal" => "a",
                "digit_verification_establishment" => "",
                "digit_verification_owner" => "",
                "digit_verification_legal_representative" => "",
                "locality" => "",
                "email" => "",
                "commercial_registration" => trim($NRO_MAT_ESTABLE),
                "commercial_registration_owner" => trim($NRO_MAT_PROP),
                "number_identification_establishment" => "",
                "number_identification_owner" => trim($NRO_ID_PROP),
                "number_identificacion_legal_representative" => trim($NRO_ID_REPLEGAL_SUC),
                "name_commercial" => "",
                "name_owner" => "",
                "observation" => "",
                "observation_history" => "",
                "page_web" => "",
                "business_name" => trim($RAZON_SOCIAL_ESTABLE),
                "phone" => trim($TELEFONO_ESTABLE),
                "type_history" => "",
                "type_identification_establishment" => "",
                "type_identification_owner" => trim($T_ID_PROP),
                "type_identification_legal_representative" => trim($T_ID_REPLEGAL_SUC)
            ];
            
            $establishment = new Establishment(); 
            $establishment->load($arrayDatos,'');
            if($establishment->save() != 1){
                $establishmentController->setSaveLogEstablishment($arrayDatos,$establishment->getErrors());
            }
            
        }
        
        echo "Ok";
        
    }
    
    public function getObjectIOFactory($pathFilename){
        $objPHPExcel = '';
        $objPHPExcel = new \PHPExcel();
        if(!empty($pathFilename))
            $objPHPExcel = \PHPExcel_IOFactory::load($pathFilename);
        return $objPHPExcel;
    }

}
