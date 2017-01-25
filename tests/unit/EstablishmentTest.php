<?php
require(__DIR__ . '../../../backend/models/Establishment.php');

use backend\models\Establishment;

class EstablishmentTest extends \PHPUnit_Framework_TestCase
{

    public $datostest;
    
    public function setUp()
    {
        $this->datostest = [
            "upz" => "a",
            "lastname_owner" => "b",
            "lastname_legal_representative" => "c",
            "ciiu1" => "123",
            "ciiu2" => "456",
            "ciiu3" => "789",
            "address_commercial" => "a",
            "address_standard" => "a",
            "address_notification" => "a",
            "date_end_commercial_registration" => "a",
            "date_commercial_registration" => "a2",
            "formal" => "a",
            "digit_verification_establishment" => "a",
            "digit_verification_owner" => "a",
            "digit_verification_legal_representative" => "a",
            "locality" => "a",
            "email" => "a",
            "commercial_registration" => "6666",
            "commercial_registration_owner" => "a",
            "number_identification_establishment" => "a",
            "number_identification_owner" => "a",
            "number_identificacion_legal_representative" => "a",
            "name_commercial" => "a",
            "name_owner" => "a",
            "observation" => "a",
            "observation_history" => "a",
            "page_web" => "a",
            "business_name" => "asasasa",
            "phone" => "a",
            "type_history" => "a",
            "type_identification_establishment" => "a",
            "type_identification_owner" => "a",
            "type_identification_legal_representative" => "a"
        ];
    }
    
    public function testSaveEstablishment(){
        $establishment = new Establishment();
        $establishment->load($this->datostest,'');
        $this->assertEquals($establishment->save(), 1);
    }
}
