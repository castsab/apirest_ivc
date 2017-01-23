<?php
namespace backend\tests;
use backend\models\Establishment;

class EstablishmentTest extends \PHPUnit_Framework_TestCase
{
    
    // tests
    public function testSaveEstablishment()
    {
        
        $establishment = new Establishment();
        
        $datostest = [
            "upz" => "a",
            "lastname_owner" => "a",
            "apellidos_representante_legal" => "a",
            "lastname_legal_representative" => "a",
            "ciiu1" => "a",
            "ciiu2" => "a",
            "ciiu3" => "a",
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
            "commercial_registration" => "a",
            "commercial_registration_owner" => "a",
            "number_identification_establishment" => "a",
            "number_identification_owner" => "a",
            "number_identificacion_legal_representative" => "a",
            "name_commercial" => "a",
            "name_owner" => "a",
            "observation" => "a",
            "observation_history" => "a",
            "page_web" => "a",
            "business_name" => "a",
            "phone" => "a",
            "type_history" => "a",
            "type_identification_establishment" => "a",
            "type_identification_owner" => "a",
            "type_identification_legal_representative" => "a"
        ];
        
        $establishment->upz = "a";
        
        //$establishment->load($datostest,'');
        $this->assertEquals($establishment->save(), 1);
       
    }
}
