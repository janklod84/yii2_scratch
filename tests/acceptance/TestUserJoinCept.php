<?php 
use Step\Acceptance\TestUserJoin;

$I = new TestUserJoin($scenario);
$I->wantTo('New users join and login');

echo "\n";

// create users
$user1 = $I->imagineUser();
$user2 = $I->imagineUser();

$I->loginUser($user1);
$I->see("This e-mail does not registred");


$I->joinUser($user1);
$I->joinUser($user2);

$I->joinUser($user1);
$I->see("This e-mail already exists.");

// first user
$I->loginUser($user1);
$I->isUserLogged($user1);
$I->noUserLogged($user2);
$I->logoutUser();


// second user
$I->loginUser($user2);
$I->isUserLogged($user2);
$I->noUserLogged($user1);
$I->logoutUser();


// try to login with not correctly password
$user1["password"] = "wrong password";
$I->loginUser($user1);
$I->see("Wrong password.");