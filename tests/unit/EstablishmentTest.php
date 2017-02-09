<?php
//require(__DIR__ . '../../../backend/models/Establishment.php');
require(__DIR__ . '../../../backend/models/LogEstablishment.php');
require(__DIR__ . '../../../backend/modules/api/controllers/EstablishmentController.php');

use backend\models\Establishment;
use backend\models\LogEstablishment;
use backend\modules\api\controllers\EstablishmentController;

class EstablishmentTest extends \PHPUnit_Framework_TestCase
{
    public $arrayDatosTest;
    
    public function setUp()
    {
        $this->arrayDatosTest = [
            "upz" => "8752",
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
            "commercial_registration" => "1123",
            "commercial_registration_owner" => "a",
            "number_identification_establishment" => "a",
            "number_identification_owner" => "a",
            "number_identificacion_legal_representative" => "a",
            "name_commercial" => "a",
            "name_owner" => "a",
            "observation" => "a",
            "observation_history" => "a",
            "page_web" => "a",
            "business_name" => "fsadfx",
            "phone" => "a",
            "type_history" => "a",
            "type_identification_establishment" => "a",
            "type_identification_owner" => "a",
            "type_identification_legal_representative" => "a",
            "neighborhood_code" => "16067BD"
        ];
    }
    
    public function testSaveEstablishment(){
        $establishmentController = new EstablishmentController($id='', $module='');
        $this->assertEquals($establishmentController->setSaveEstablishment($this->arrayDatosTest), 1);
    }
    
    public function testRegisterLogIfNotSaveEstablishment() {
        $establishment = new Establishment();
        $establishment->load($this->arrayDatosTest,'');
        if($establishment->save() != 1){
            $establishmentController = new EstablishmentController($id='', $module='');
            $resultSave = $establishmentController->setSaveLogEstablishment($this->arrayDatosTest,$establishment->getErrors());
            $this->assertEquals($resultSave->save(), 1);
        }
    }
}
