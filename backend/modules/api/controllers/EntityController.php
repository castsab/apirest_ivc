<?php

namespace backend\modules\api\controllers;

use yii\rest\ActiveController;
use backend\models\Entity;

use Yii;

class EntityController extends ActiveController
{
    public $modelClass = 'backend\models\Entity';  
    
    
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
        $model = new Entity();
        
        $model->load(Yii::$app->request->post(),'');
        
            $model->save();
        
        
        return $model;
    }

}


