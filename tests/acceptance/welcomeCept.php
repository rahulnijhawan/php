<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Want to ensure frontpage work.');
$I->amOnpage('/');
$I->see('Home');
$I->fillField('#name', 'rahul');	
$I->click('#login');	