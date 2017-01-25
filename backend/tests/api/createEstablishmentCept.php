<?php use backend\tests\ApiTester;

$I = new ApiTester($scenario);
$I->wantTo('create a establishment via REST API');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/establishment', ['upz' => '123456']);

