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
        if(array_key_exists("start_date", $data) && array_key_exists("end_date", $data)){
            $content = [
            "entity_id" => $data['id'],
            "table_name" => $data['table_name'],
            "start_date" => $data['start_date'],
            "end_date" => $data['end_date'],   
            ];
        }else{
            $content = [
            "entity_id" => $data['id'],
            "table_name" => $data['table_name'],
            ];
        }
        
        $bod = [
            "synchronize" => $content,
        ];
        //$urlSOAP = 'http://192.168.88.212/axis2/services/IvcWebServices.IvcWebServicesHttpEndpoint/synchronize';
        $urlSOAP = "http://private-d4f2fa-ivc.apiary-mock.com/synchronization";
        $client = new Client();
        $response = $client->createRequest()
        ->setFormat(Client::FORMAT_JSON)
        ->setMethod('POST')
        ->setUrl($urlSOAP)
        ->setData($bod)
        ->send();
        /*
        if($response->isOk){
        return $response->getData()["synchronizeResponse"]["return"];
        }
        return $response->getData()["Fault"]["faultstring"];
        */
        return $response->getData()["status"];
     
    }
}
