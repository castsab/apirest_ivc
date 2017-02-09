<?php
require(__DIR__ . '../../../backend/models/Visit.php');
require(__DIR__ . '../../../backend/models/Entity.php');
require(__DIR__ . '../../../backend/models/Establishment.php');
require(__DIR__ . '../../../backend/models/LogVisit.php');
require(__DIR__ . '../../../backend/modules/api/controllers/VisitController.php');

use backend\models\Visit;
use backend\models\LogVisit;
use backend\modules\api\controllers\VisitController;

class VisitTest extends \PHPUnit_Framework_TestCase
{
    public $arrayDatosTest;
    
    public function setUp()
    {
        $this->arrayDatosTest1 = [
            'id_entity' =>  "1",
            'id_establishment' => "1",
            'date_event' => "25-07-2017",
            'because_visit' => "",
            'state_visit' => "",
            'concept_visit' => "1",
            'type_identification_government_employee' => "",
            'number_identity_government_employee' => "",
            'lastname_government_employee' => "",
            'name_government_employee' => "",
            'type_identity_atiende' => "",
            'number_identity_atiende' => "",
            'lastname_attends' => "",
            'name_attends' => "",
            'observation_visit' => "",
        ];
        $this->arrayDatosTest2 = [
            'id_entity' =>  1,
            'id_establishment' => "86",
            'date_event' => "25-07-2017",
            'because_visit' => "",
            'state_visit' => "",
            'concept_visit' => "1",
            'type_identification_government_employee' => "",
            'number_identity_government_employee' => "",
            'lastname_government_employee' => "",
            'name_government_employee' => "",
            'type_identity_atiende' => "",
            'number_identity_atiende' => "",
            'lastname_attends' => "",
            'name_attends' => "",
            'observation_visit' => "",
        ];
    }
    
    public function testSaveVisit(){
        $visitController = new VisitController($id='', $module='');
        $this->assertEquals($visitController->setSaveVisit($this->arrayDatosTest1),1);
    }
    
    public function testRegisterLogIfNotSaveVisit() {
        $visit = new Visit();
        $visit->load($this->arrayDatosTest2,'');
        if($visit->save() != 1){
            $visitController = new VisitController($id='', $module='');
            $resultSave = $visitController->setSaveLogVisit($this->arrayDatosTest2,$visit->getErrors());
            $this->assertEquals($resultSave->save(), 1);
        }
    }
}
