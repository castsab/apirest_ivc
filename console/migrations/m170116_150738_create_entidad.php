<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170116_150738_create_entidad extends Migration
{
    public function safeUp()
    {
        $this->createTable('entidad', [
            'id'=>Schema::TYPE_INTEGER.' not null',
            'nombre_entidad'=>  Schema::TYPE_STRING.'(255) not null'
        ]);
        
        $this->addPrimaryKey('pk_id_entidad', 'entidad', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('entidad');
    }
}
