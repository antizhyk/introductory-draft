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

/* try {//Код подключения к БД выводящий ошибки
	$db = new PDO('mysql:host=HOSTNAME;dbname=DB_NAME', 'USERNAME', 'PASSWORD');
} catch (PDOException $e) {
	echo $e->getmessage();
} */
