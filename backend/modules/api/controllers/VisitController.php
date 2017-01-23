<?php

namespace backend\modules\api\controllers;

use yii\rest\ActiveController;
use backend\models\Visit;
use backend\models\Establishment;
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
        $model = new Visit();
        
        $model->load(Yii::$app->request->post(),'');
        
            $model->save();
        
        
        return $model;
    }

}


