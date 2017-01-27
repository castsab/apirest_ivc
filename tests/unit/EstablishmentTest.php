<?php
require(__DIR__ . '../../../backend/models/Establishment.php');

use backend\models\Establishment;

class EstablishmentTest extends \PHPUnit_Framework_TestCase
{

    public $arrayDatosTest;
    public $arrayDatosTestLot;
    
    public function setUp()
    {
        $this->arrayDatosTest = [
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
            "commercial_registration" => "57777",
            "commercial_registration_owner" => "a",
            "number_identification_establishment" => "a",
            "number_identification_owner" => "a",
            "number_identificacion_legal_representative" => "a",
            "name_commercial" => "a",
            "name_owner" => "a",
            "observation" => "a",
            "observation_history" => "a",
            "page_web" => "a",
            "business_name" => "Establicimiento",
            "phone" => "a",
            "type_history" => "a",
            "type_identification_establishment" => "a",
            "type_identification_owner" => "a",
            "type_identification_legal_representative" => "a"
        ];
        
        $this->arrayDatosTestLot = [0 => [
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
            "commercial_registration" => "77777",
            "commercial_registration_owner" => "a",
            "number_identification_establishment" => "a",
            "number_identification_owner" => "a",
            "number_identificacion_legal_representative" => "a",
            "name_commercial" => "a",
            "name_owner" => "a",
            "observation" => "a",
            "observation_history" => "a",
            "page_web" => "a",
            "business_name" => "Establecimiento 1",
            "phone" => "a",
            "type_history" => "a",
            "type_identification_establishment" => "a",
            "type_identification_owner" => "a",
            "type_identification_legal_representative" => "a"
        ],1 => [
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
            "commercial_registration" => "67777",
            "commercial_registration_owner" => "a",
            "number_identification_establishment" => "a",
            "number_identification_owner" => "a",
            "number_identificacion_legal_representative" => "a",
            "name_commercial" => "a",
            "name_owner" => "a",
            "observation" => "a",
            "observation_history" => "a",
            "page_web" => "a",
            "business_name" => "Establecimiento 2",
            "phone" => "a",
            "type_history" => "a",
            "type_identification_establishment" => "a",
            "type_identification_owner" => "a",
            "type_identification_legal_representative" => "a"
        ]];
    }
    
    public function testSaveEstablishment(){
        $establishment = new Establishment();
        $establishment->load($this->arrayDatosTest,'');
        $this->assertEquals($establishment->save(), 1);
    }
    
    public function testSaveEstablishmentLot(){
        foreach ($this->arrayDatosTestLot as $key => $value) {
            $establishment = new Establishment(); 
            $establishment->load($this->arrayDatosTestLot[$key],'');
            $this->assertEquals($establishment->save(), 1);
        }
    }
    
    public function testValidateIsArrayMultidimensional(){
        if (count($this->arrayDatosTestLot) != count($this->arrayDatosTestLot, COUNT_RECURSIVE)) 
            $this->assertEquals(1, 1);
        else
            $this->assertEquals(0, 1);
    }
}
