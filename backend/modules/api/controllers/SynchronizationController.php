<?php

namespace backend\modules\api\controllers;

use yii\rest\Controller;
use yii\httpclient\Client;
use Yii;
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
    public function actionUpdate( )
    {
        $data = Yii::$app->request->getBodyParams();
        $content = [
            'entity_id' => $data['id'],
            'table_name' => $data['table_name'],
            ];
        $client = new Client();
        $response = $client->createRequest()
        ->setFormat(Client::FORMAT_JSON)
        ->setMethod('POST')
        ->setUrl('http://private-d4f2fa-ivc.apiary-mock.com/synchronization')
        ->setData($content)
        ->send();
        return $response->data['status'];
    }
}
