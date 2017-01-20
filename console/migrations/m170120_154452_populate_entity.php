<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170120_154452_populate_entity extends Migration
{
    public function safeUp()
    {
        $this->insert('entity', [
            'id'=>'1',
            'name_entity'=>'Ambiente'
        ]);
        
        $this->insert('entity', [
            'id'=>'2',
            'name_entity'=>'Salud'
        ]);
        
        $this->insert('entity', [
            'id'=>'3',
            'name_entity'=>'Gobierno'
        ]);
        
        $this->insert('entity', [
            'id'=>'4',
            'name_entity'=>'Bomberos'
        ]);
        
    }

    public function safeDown()
    {
        $this->delete('entity');
    }
}
