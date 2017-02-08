<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170206_203103_alter_log_establishment extends Migration
{
    public function up()
    {
        $table = 'log_establishment';
        $this->addColumn($table, 'commune', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'name_legal_representative', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'date_last_renewal', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'neighborhood', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'localization_status', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'X_final', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'Y_final', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'category_code', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'subsidiary', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'locality_code', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'locality_name', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'upz_code', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'neighborhood_code', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'phone_two', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'type_establishment_code', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'name_type_establishment', Schema::TYPE_STRING."(500)");
        $this->addColumn($table, 'name_economic_activity', Schema::TYPE_STRING."(500)");
    }

    public function down()
    {
        echo "m170206_203103_alter_log_establishment cannot be reverted.\n";
        return false;
    }

}
