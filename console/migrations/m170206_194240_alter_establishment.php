<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170206_194240_alter_establishment extends Migration
{
    public function up()
    {
        $this->alterColumn('establishment', 'type_identification_owner', Schema::TYPE_STRING."(10)");
        $this->alterColumn('establishment', 'type_identification_establishment', Schema::TYPE_STRING."(10)");
        $this->alterColumn('establishment', 'type_identification_legal_representative', Schema::TYPE_STRING."(10)");
        $this->alterColumn('establishment', 'number_identification_establishment', Schema::TYPE_STRING."(30)");
        $this->alterColumn('establishment', 'number_identification_owner', Schema::TYPE_STRING."(30)");
        $this->alterColumn('establishment', 'number_identificacion_legal_representative', Schema::TYPE_STRING."(30)");
    }

    public function down()
    {
        echo "m170206_194240_alter_establishment cannot be reverted.\n";
        return false;
    }
}
