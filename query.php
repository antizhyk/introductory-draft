<?php
require './includes/db.php';

$user = R::findOne('users', 'id = ?', array($_POST['btn']));

$user->position = $_POST['status'];
$user->status = $_POST['condition'];
R::store($user);

header('Location: /admin-panel.php');
