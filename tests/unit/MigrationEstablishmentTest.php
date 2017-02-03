<?php

require(__DIR__ . '../../../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php');
require(__DIR__ . '../../../console/controllers/MigrationEstablishmentController.php');

use console\controllers\MigrationEstablishmentController;

class MigrationEstablishmentTest extends \PHPUnit_Framework_TestCase
{
    
    public function testMe(){
        $this->assertEquals(1,1);
    }
    
    public function testValidateThatExistObjectIOFactory(){
        $pathFilename = \Yii::getAlias('@tests/base/establecimientosCamaraComercioTest.xlsx');
        $migrationEstablishmentController = new MigrationEstablishmentController($id='', $module='');
        $this->assertNotEmpty($migrationEstablishmentController->getObjectIOFactory($pathFilename));
    }
    
}
