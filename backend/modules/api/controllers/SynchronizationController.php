<?php

namespace backend\modules\api\controllers;

use yii\rest\Controller;
use yii\httpclient\Client;
/**
 * Default controller for the `api` module
 */
class SynchronizationController extends Controller
{
    
    protected function verbs(){
        return [
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH','POST'],
            'delete' => ['DELETE'],
            'view' => ['GET'],
            'index'=>['GET'],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
     public function actionIndex()
    {
        return "True";
    }
    public function actionUpdate( $id )
    {
        
        $client = new Client();
        $response = $client->createRequest()
        ->setMethod('PUT')
        ->setUrl('http://private-d4f2fa-ivc.apiary-mock.com/synchronization')
        ->send();
        return $response->data['status'].' synchronization'.$id;
    }
}
