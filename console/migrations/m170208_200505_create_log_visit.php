<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;
class m170208_200505_create_log_visit extends Migration
{
    public function up()
    {
        $this->createTable('log_visit', [
                    'id'=>Schema::TYPE_BIGPK,
                    'id_entity'=>Schema::TYPE_INTEGER,
                    'id_establishment'=>Schema::TYPE_INTEGER,
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
                    'observation_visit'=>Schema::TYPE_STRING.'(500)',
                    "log" => Schema::TYPE_TEXT,
                    "log_created_at" => Schema::TYPE_INTEGER . ' not null'
        ]);
        
        
    }

    public function down()
    {
        $this->dropTable("log_visit");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
