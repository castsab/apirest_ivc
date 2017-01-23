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
        if($this->getValidateIfThisRegisteredCommercialRegistration(Yii::$app->request->post('commercial_registration')) == false)
            $model = new Establishment();
        else
            $model = Establishment::findOne(['id'=>Establishment::getId(Yii::$app->request->post('commercial_registration'))]);
        
        $model->load(Yii::$app->request->post(),'');
        
        if(!empty(Yii::$app->request->post('business_name')))
            $model->save();
    }
    
    public function getValidateIfThisRegisteredCommercialRegistration($commercial_registration = ''){
        $model = Establishment::getId($commercial_registration);
        if($model)
            return true;
        else
            return false;
        
    }
    
}


