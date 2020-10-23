<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test the form submissions');
$I->amOnPage('/form.php');

$I->seeElement('#form_post');

$I->sendAjaxRequest('POST', '/post.php', array(
    'form_text' => 'TEXT',
    'form_textarea' => 'TEXTAREA',
    'form_multiselect[]' => array(
        'One', 'Two', 'Nine'
    ),
    'form_radio' => 'Yes'
));

$I->wantTo('test the database entries');

$I->seeInDatabase('form', array('radio' => 'Yes', 'select' => 'One'));
$I->seeInDatabase('form', array('radio' => 'Yes', 'select' => 'Two'));
$I->seeInDatabase('form', array('radio' => 'Yes', 'select' => 'Nine', 'text' => 'TEXT'));

?>