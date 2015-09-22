<?php

Environment::configure('development', true, [
	'MYSQL_DB_HOST' => 'localhost',
	'MYSQL_USERNAME' => 'root',
	'MYSQL_PASSWORD' => 'password',
	'MYSQL_DB_NAME' => 'test',
	'MYSQL_TEST_DB_NAME' => 'test_mynotebooks',
	'MYSQL_PREFIX' => '',
], function() {
	CakePlugin::load('Bdd');
	CakePlugin::load('Fabricate');
	Configure::write('app.disableValidatePost', true);
});
