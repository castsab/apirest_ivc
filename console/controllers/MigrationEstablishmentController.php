<?php

namespace console\controllers;

use yii\console\Controller;
use backend\modules\api\controllers\EstablishmentController;
use backend\models\Establishment;

class MigrationEstablishmentController extends Controller
{
    public function actionIndex(){
        
        ini_set('memory_limit', '512M');
        
        $establishmentController = new EstablishmentController($id='', $module='');
        
        $arrayData = '';
        $pathFilename = \Yii::getAlias('@console/base/establecimientosCamaraComercio.xlsx');
        
        if(filesize($pathFilename) > 9202963){
            echo "Favor valide el peso del archivo, este no puede superar 8,7 Mb";
            die();
        }
        
        $objPHPExcel = $this->getObjectIOFactory($pathFilename);
        $sheet = $objPHPExcel->getSheet(0);
        $sheet = $objPHPExcel->getActiveSheet();
        
        $time_init = date("d/m/Y H:i:s");
        
        echo "Proceso iniciado : ".$time_init;
        
        for ($file = 2; $file <= $sheet->getHighestRow(); $file++) {
            $arrayData = $this->getBuildArrayOfDataFromEstablishments($sheet,$file);
            $establishment = $establishmentController->setSaveEstablishment($arrayData);
            if($establishment != 1){
                $establishmentController->setSaveLogEstablishment($arrayData,$establishment);
            }
        }
        
        $time_end = date("d/m/Y H:i:s");
        echo "\nTiempo empleado: " . $this->getMinutesBetweenTwoDates($time_init, $time_end);
        echo "\nProceso finalizado : ".$time_end;
    }
    
    public function getMinutesBetweenTwoDates($date1, $date2){
        $date1 = str_replace('/', '-', $date1);
        $date2 = str_replace('/', '-', $date2);
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);
        return round(($date2 - $date1) / 60).' m';
    }

    public function getObjectIOFactory($pathFilename){
        $objPHPExcel = '';
        $objPHPExcel = new \PHPExcel();
        if(!empty($pathFilename))
            $objPHPExcel = \PHPExcel_IOFactory::load($pathFilename);
        return $objPHPExcel;
    }
    
    public function getBuildArrayOfDataFromEstablishments($objSheet,$file){
        $arrayData = '';
        
        $NRO_MAT_ESTABLE = trim($objSheet->getCellByColumnAndRow(2, $file)->getValue());
        $NRO_ID_PROP = trim($objSheet->getCellByColumnAndRow(3, $file)->getValue());
        $NRO_MAT_PROP = trim($objSheet->getCellByColumnAndRow(4, $file)->getValue());
        $T_ID_PROP = trim($objSheet->getCellByColumnAndRow(5, $file)->getValue());
        $REPLEGAL_SUC = trim($objSheet->getCellByColumnAndRow(6, $file)->getValue());
        $T_ID_REPLEGAL_SUC = trim($objSheet->getCellByColumnAndRow(7, $file)->getValue());
        $NRO_ID_REPLEGAL_SUC = trim($objSheet->getCellByColumnAndRow(8, $file)->getValue());
        $FEC_MAT_ESTABLE = trim($objSheet->getCellByColumnAndRow(9, $file)->getValue());
        $RAZON_SOCIAL_ESTABLE = trim($objSheet->getCellByColumnAndRow(10, $file)->getValue());
        $DIR_COM_ESTABLE = trim($objSheet->getCellByColumnAndRow(11, $file)->getValue());
        $COD_MUN_ESTABLE = trim($objSheet->getCellByColumnAndRow(12, $file)->getValue());
        $TELEFONO_ESTABLE = trim($objSheet->getCellByColumnAndRow(13, $file)->getValue());
        $F_ULTIMA_RENOVA = trim($objSheet->getCellByColumnAndRow(14, $file)->getValue());
        $BARRIO = trim($objSheet->getCellByColumnAndRow(15, $file)->getValue());
        $estado = trim($objSheet->getCellByColumnAndRow(16, $file)->getValue());
        $X_final = trim($objSheet->getCellByColumnAndRow(17, $file)->getValue());
        $Y_final = trim($objSheet->getCellByColumnAndRow(18, $file)->getValue());
        $Cod_cat = trim($objSheet->getCellByColumnAndRow(19, $file)->getValue());
        $formal = ($NRO_MAT_ESTABLE)?'1':'0';
        
        $arrayData = [
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
            "formal" => $formal,
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
            "type_identification_legal_representative" => trim($T_ID_REPLEGAL_SUC),
            "date_last_renewal" => trim($F_ULTIMA_RENOVA),
            "neighborhood" => trim($BARRIO),
            "localization_status" => trim($estado),
            "X_final" => trim($X_final),
            "Y_final" => trim($Y_final),
            "category_code" => trim($Cod_cat),
        ];
        
        return $arrayData;
    }

}
