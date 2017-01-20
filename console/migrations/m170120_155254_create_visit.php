<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170120_155254_create_visit extends Migration
{
    public function safeUp()
    {
        $this->createTable('visit', [
            'id'=>Schema::TYPE_BIGPK,
            'id_entity'=>Schema::TYPE_INTEGER.' not null',
            'id_establishment'=>Schema::TYPE_INTEGER.' not null',
            'date_event'=>Schema::TYPE_STRING.'(20)',
            'because_visit'=>Schema::TYPE_STRING.'(3)',
            'state_visit'=>Schema::TYPE_STRING.'(3)',
            'concept_visit'=>Schema::TYPE_STRING.'(3)',
            'type_identification_government_employee'=>Schema::TYPE_STRING.'(1)',
            'number_identity_government_employee'=>Schema::TYPE_STRING.'(14)',
            'lastname_government_employee'=>Schema::TYPE_STRING.'(100)',
            'name_government_employee'=>Schema::TYPE_STRING.'(100)',
            'type_identity_atiende'=>Schema::TYPE_STRING.'(1)',
            'number_identity_atiende'=>Schema::TYPE_STRING.'(14)',
            'lastname_attends'=>Schema::TYPE_STRING.'(100)',
            'name_attends'=>Schema::TYPE_STRING.'(100)',
            'observation_visit'=>Schema::TYPE_STRING.'(500)'
        ]);
        
        $this->addForeignKey('fk_id_entity_visit', 'visit', 'id_entity', 'entity', 'id');
        $this->addForeignKey('fk_id_establishment_visit', 'visit', 'id_establishment', 'establishment', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('visit');
    }
}
