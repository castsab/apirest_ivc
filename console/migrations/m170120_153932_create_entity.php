<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170120_153932_create_entity extends Migration
{
    public function safeUp()
    {
        $this->createTable('entity', [
            'id'=>Schema::TYPE_INTEGER.' not null',
            'name_entity'=>  Schema::TYPE_STRING.'(255) not null'
        ]);
        
        $this->addPrimaryKey('pk_id_entity', 'entity', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('entity');
    }
}
