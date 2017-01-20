<?php

namespace frontend\modules\api\controllers;

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
        $model = new Establishment();
        $model->load(Yii::$app->request->post(),'');
        $model->save();
        return $model;
    }
}


