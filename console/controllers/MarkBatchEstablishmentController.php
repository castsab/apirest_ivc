<?php

namespace console\controllers;

use yii\console\Controller;
use backend\models\Establishment;
use Yii;

class MarkBatchEstablishmentController extends Controller {

    public function actionIndex() {
        $this->setResetBatch();
        $batch = 0;
        static::setMarkBatchEstablishment($batch);
    }

    public static function setMarkBatchEstablishment($batch) {
        ini_set('memory_limit', '-1');
        $batch = (1 + $batch);

        echo "\nProceso Iniciado " . $batch;

        $arrayEstablishment = Establishment::find()->where(['batch' => 0])->limit(10000)->all();

        if ($arrayEstablishment) {
            static::setRunUpdateProcessEstablishment($batch);
            static::setMarkBatchEstablishment($batch);
        } else {
            echo "\nProceso finalizado";
            die();
        }
    }

    public static function setRunUpdateProcessEstablishment($batch) {
        $connection = \Yii::$app->db;
        $sql = "UPDATE establishment item
                SET batch = " . $batch . "
                FROM ( 
                   SELECT id
                   FROM establishment
                   WHERE batch=0 
                   LIMIT 10000
                   FOR UPDATE
                ) sub
                WHERE item.id = sub.id";
        $connection->createCommand($sql)->execute();
    }
    
    private function setResetBatch(){
        $connection = \Yii::$app->db;
        $sql = "UPDATE establishment SET batch = 0";
        $connection->createCommand($sql)->execute();
    }

}
