<?php 
$I = new AcceptanceTester($scenario);
// $I->wantTo('perform actions and see result');
$I->wantTo('Open the home/join/login page');
$I->amOnPage('/');
$I->see('Welcome', 'h1');
$I->seeLink('Join', '/site/join');
$I->seeLink('Login', '/site/login');

$I->amOnPage('/site/join');
$I->see('Join us', 'h1');

$I->amOnPage('/site/login');
$I->see('Log in', 'h1');
