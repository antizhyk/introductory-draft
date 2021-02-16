<?php
/* Подключение к БД */
require './libs/rb.php';
R::setup(
	'mysql:host=localhost;dbname=pagetest_one',
	'pagetest_admin',
	'admin16022021'
);
if (!R::testConnection()) {

	exit('No connect');
}

session_start();
