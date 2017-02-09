<?php

namespace backend\modules\api\controllers;

use yii\rest\ActiveController;
use backend\models\Visit;
use backend\models\LogVisit;
use Yii;

class VisitController extends ActiveController
{
    public $modelClass = 'backend\models\Visit';  
    
    
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
                $visit = $this->setSaveVisit($arrayDatos[$key]);
                if($visit != 1){
                    $this->setSaveLogVisit($arrayDatos[$key],$visit);
                }
            }
        }else{
            $visit = $this->setSaveVisit($arrayDatos);
            if($visit != 1){
                
                print_r($visit);
                
                $this->setSaveLogVisit($arrayDatos,$visit);
            }
        }
        return $visit;
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
    public function setSaveLogVisit($arrayDataVisit, $arrayErrors){
        $time = time();
        $logVisit = new LogVisit();
        $arrayDataVisit['log'] = $this->getStrErrors($arrayErrors);
        $arrayDataVisit['log_created_at'] = $time;
        $logVisit->load($arrayDataVisit,'');
        $logVisit->save();
        return $logVisit;
    }
    
    public function setSaveVisit($arrayData){
        $visit = new Visit();
        $visit->load($arrayData,'');
        if($visit->save() != 1)
            return $visit->getErrors();
        else
            return true;
    }
}


