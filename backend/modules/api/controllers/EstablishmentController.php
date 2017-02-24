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
        unset($actions['index']);
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
                $establishment = $this->setSaveEstablishment($arrayDatos[$key]);
                if($establishment != 1){
                    $this->setSaveLogEstablishment($arrayDatos[$key],$establishment);
                }
            }
        }else{
            $establishment = $this->setSaveEstablishment($arrayDatos);
            if($establishment != 1){
                
                print_r($establishment);
                
                $this->setSaveLogEstablishment($arrayDatos,$establishment);
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
    
    public function setSaveEstablishment($arrayData){
        $establishment = new Establishment();
        $arrayDataEstablishment = $this->setCleanArray($arrayData);
        $establishment->load($arrayDataEstablishment,'');
        if($establishment->save() != 1)
            return $establishment->getErrors();
        else
            return true;
    }
    
    public function setCleanArray($arrayData){
        return array_map('utf8_encode',array_map('trim',$arrayData));
    }
    
    public function actionIndex(){
        ini_set('memory_limit', '-1');
        
        $arrayDatos = Yii::$app->request->get();
        $batch = (array_key_exists('batch',$arrayDatos))?$arrayDatos['batch']:'';
        
        if($batch){
            $establishment = new Establishment();
            return $establishment->findAll(['batch'=>$batch]);
        }else{
            return false;
        }
    }
}


