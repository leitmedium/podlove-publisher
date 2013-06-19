<?php
$I = new WebGuy($scenario);
$I->wantTo('Setup a podcast, create an episode and ensure everything works.');

// login
$I->amOnPage('/wp-login.php');
$I->fillField('#user_login', 'admin');
$I->fillField('#user_pass', 'admin');
$I->click('Log In');
$I->see('Howdy, admin');

// configure podcast
$I->click('Podcast Settings', '#adminmenu');
$I->fillField('#podlove_podcast_title', 'Test Podcast');
$I->fillField('#podlove_podcast_subtitle', 'The Testing Podcast');
$I->fillField('#podlove_podcast_media_file_base_uri', 'http://satoripress.com/wp-content/ppp/');
$I->click('Save Changes');

// configure assets
$I->click('Episode Assets', '#adminmenu');
$I->click('.wrap .add-new-h2');
$I->selectOption('#podlove_episode_asset_type', 'audio');
$I->selectOption('#podlove_episode_asset_file_type_id', 'MP3 Audio (mp3)');
$I->click('Save Changes');
$I->see('MP3 Audio', 'table.episode_assets');

// configure feeds
// $I->click('Podcast Feeds', '#adminmenu');
// $I->click('.wrap h2 > .add-new-h2');
// $I->seeCurrentUrlMatches('podlove_feeds_settings_handle');
// $I->selectOption('#podlove_feed_episode_asset_id', 'MP3 Audio');
// $I->fillField('#podlove_feed_name', 'MP3 Audio Feed');
// $I->fillField('#podlove_feed_slug', 'mp3');
// $I->click('Save Changes');
// $I->see('MP3 Audio Feed', 'table.feeds');