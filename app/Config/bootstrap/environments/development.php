<?php

Environment::configure('development', true, [
	'MYSQL_DB_HOST' => 'localhost',
	'MYSQL_USERNAME' => 'yusuke',
	'MYSQL_PASSWORD' => 'passw0rd',
	'MYSQL_DB_NAME' => 'mynotebooks',
	'MYSQL_TEST_DB_NAME' => 'test_mynotebooks',
	'MYSQL_PREFIX' => '',
]);
