<?php

namespace backend\modules\api\controllers;

use yii\rest\ActiveController;
use backend\models\Establishment;

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
                $establishment->save();
            }
        }else{
            $establishment = new Establishment(); 
            $establishment->load($arrayDatos,'');
            $establishment->save();
        }
        return $establishment;
    }
    
    public function getValidateIsArrayMultidimencional($array){
        if (count($array) != count($array, COUNT_RECURSIVE)) 
            return true;
        else
            return false;
    }
}


