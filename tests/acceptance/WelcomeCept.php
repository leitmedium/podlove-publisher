<?php
$I = new WebGuy($scenario);
$I->wantTo('create an new episode');

// login
$I->amOnPage('/wp-login.php');
$I->fillField('#user_login', 'admin');
$I->fillField('#user_pass', 'admin');
$I->click('Log In');
$I->see('Howdy, admin');

// create new episode
$I->amOnPage('/wp-admin/post-new.php?post_type=podcast');
$I->see('Add New Episode');