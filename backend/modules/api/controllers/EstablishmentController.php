<?php

namespace backend\modules\api\controllers;

use yii\rest\ActiveController;
use backend\models\Establishment;
use backend\models\LogEstablishment;

use Yii;

class EstablishmentController extends ActiveController
{
    public $modelClass = 'backend\models\Establishment';  
    
    
    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }

    protected function verbs(){
        return [
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH','POST'],
            'delete' => ['DELETE'],
            'view' => ['GET'],
            'index'=>['GET'],
        ];
    }
    
    public function actionCreate(){
        $arrayDatos = Yii::$app->request->post();
        if($this->getValidateIsArrayMultidimencional($arrayDatos) == true){
            foreach ($arrayDatos as $key => $value) {
                $establishment = new Establishment(); 
                $establishment->load($arrayDatos[$key],'');
                if($establishment->save() != 1){
                    $this->setSaveLogEstablishment($arrayDatos[$key],$establishment->getErrors());
                }
            }
        }else{
            $establishment = new Establishment(); 
            $establishment->load($arrayDatos,'');
            if($establishment->save() != 1){
                $this->setSaveLogEstablishment($arrayDatos,$establishment->getErrors());
            }
        }
        
        return $establishment;
    }
    
    public function getValidateIsArrayMultidimencional($array){
        if (count($array) != count($array, COUNT_RECURSIVE)) 
            return true;
        else
            return false;
    }
    
    public function getStrErrors($arrayErrors){
        $strErrors = '';
        foreach ($arrayErrors as $key  => $value) {
            foreach ($arrayErrors[$key] as $k => $value) {
                $strErrors .= '|'.$arrayErrors[$key][$k];
            }
        }
        return substr($strErrors, 1);
    }
    
    public function setSaveLogEstablishment($arrayDataEstablishment, $arrayErrors){
        $time = time();
        $logEstablishment = new LogEstablishment();
        $arrayDataEstablishment['log'] = $this->getStrErrors($arrayErrors);
        $arrayDataEstablishment['log_created_at'] = $time;
        $logEstablishment->load($arrayDataEstablishment,'');
        $logEstablishment->save();
        return $logEstablishment;
    }
}


