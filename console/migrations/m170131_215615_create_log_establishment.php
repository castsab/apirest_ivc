<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170131_215615_create_log_establishment extends Migration
{
    public function up()
    {
        $this->createTable("log_establishment", 
        [
            "id"=>  Schema::TYPE_PK,
            "upz"=>  Schema::TYPE_STRING."(500)",
            "lastname_owner"=>  Schema::TYPE_STRING."(100)",
            "lastname_legal_representative"=>  Schema::TYPE_STRING."(100)",
            "ciiu1"=>  Schema::TYPE_STRING."(10)",
            "ciiu2"=>  Schema::TYPE_STRING."(10)",
            "ciiu3"=>  Schema::TYPE_STRING."(10)",
            "address_commercial"=>  Schema::TYPE_STRING."(255)",
            "address_standard"=>  Schema::TYPE_STRING."(500)",
            "address_notification"=>  Schema::TYPE_STRING."(500)",
            "date_end_commercial_registration"=>  Schema::TYPE_STRING."(20)",
            "date_commercial_registration"=>  Schema::TYPE_STRING."(20)",
            "formal"=>  Schema::TYPE_STRING."(1)",
            "digit_verification_establishment"=>  Schema::TYPE_STRING."(1)",
            "digit_verification_owner"=>  Schema::TYPE_STRING."(1)",
            "digit_verification_legal_representative"=>  Schema::TYPE_STRING."(1)",
            "locality"=>  Schema::TYPE_STRING."(500)",
            "email"=>  Schema::TYPE_STRING."(100)",
            "commercial_registration"=>  Schema::TYPE_STRING."(12)",
            "commercial_registration_owner"=>  Schema::TYPE_STRING."(12)",
            "number_identification_establishment"=>  Schema::TYPE_STRING."(14)",
            "number_identification_owner"=>  Schema::TYPE_STRING."(14)",
            "number_identificacion_legal_representative"=>  Schema::TYPE_STRING."(14)",
            "name_commercial"=>  Schema::TYPE_STRING."(500)",
            "name_owner"=>  Schema::TYPE_STRING."(500)",
            "observation"=>  Schema::TYPE_STRING."(500)",
            "observation_history"=>  Schema::TYPE_STRING."(500)",
            "page_web"=>  Schema::TYPE_STRING."(500)",
            "business_name"=>  Schema::TYPE_STRING."(500)",
            "phone"=>  Schema::TYPE_STRING."(100)",
            "type_history"=>  Schema::TYPE_STRING."(1)",
            "type_identification_establishment"=>  Schema::TYPE_STRING."(1)",
            "type_identification_owner"=>  Schema::TYPE_STRING."(1)",
            "type_identification_legal_representative"=>  Schema::TYPE_STRING."(1)",
            "log" => Schema::TYPE_TEXT,
            "log_created_at" => Schema::TYPE_INTEGER . ' not null'
        ]);
    }

    public function down()
    {
        $this->dropTable("log_establishment");
    }

}
