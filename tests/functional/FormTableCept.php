<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test the database entries');

$I->seeInDatabase('form', array('radio' => 'Yes', 'select' => 'One'));
$I->seeInDatabase('form', array('radio' => 'Yes', 'select' => 'Two'));
$I->seeInDatabase('form', array('radio' => 'Yes', 'select' => 'Nine', 'text' => 'TEXT'));
