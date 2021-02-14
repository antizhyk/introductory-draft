<?php
require './includes/db.php';

$user = R::findOne('users', 'id = ?', array($_POST['btn']));

$user->status = $_POST['status'];
$user->condition_account = $_POST['condition'];
R::store($user);

header('Location: /admin-panel.php');
