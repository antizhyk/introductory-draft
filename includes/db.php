<?php
/* Подключение к БД */
require './libs/rb.php';
R::setup(
	'mysql:host=localhost;dbname=introductory-draft',
	'root',
	'root'
);

session_start();
