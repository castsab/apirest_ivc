<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170206_162952_alter_log_establishment extends Migration
{
    public function up()
    {
        $this->alterColumn('log_establishment', 'upz', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'lastname_owner', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'lastname_legal_representative', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'ciiu1', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'ciiu2', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'ciiu3', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'address_commercial', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'address_standard', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'address_notification', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'date_end_commercial_registration', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'date_commercial_registration', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'formal', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'digit_verification_establishment', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'digit_verification_owner', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'digit_verification_legal_representative', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'locality', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'email', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'commercial_registration', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'commercial_registration_owner', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'number_identification_establishment', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'number_identification_owner', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'number_identificacion_legal_representative', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'name_commercial', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'name_owner', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'observation', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'observation_history', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'page_web', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'business_name', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'phone', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'type_history', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'type_identification_establishment', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'type_identification_owner', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'type_identification_legal_representative', Schema::TYPE_STRING."(500)");
        $this->alterColumn('log_establishment', 'type_identification_establishment', Schema::TYPE_STRING."(500)");
        
    }

    public function down()
    {
        echo "m170206_162952_alter_log_establishment cannot be reverted.\n";
        return false;
    }

}
