<?php
require './db.php';


print_r($_POST);

if (move_uploaded_file($_FILES['photo']['tmp_name'], '../img/' . $_FILES['photo']['name'])) {
	echo 'File load';
} else {
	echo 'Error load file';
}

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$number = $_POST['tel'];
$mail = $_POST['email'];
$avatar = $_FILES['photo']['name'];
$password = $_POST['password'];
$sql = "INSERT INTO `user` (`surname`, `name`,	`patronymic`,	`number`,	`mail`,	`photo`,	`password`) 
VALUES ('$surname', '$name', '$patronymic', '$number', '$mail', '$avatar', '$password')";
echo "<br>$surname, $name, $patronymic, $number, $mail, $avatar, $password";

if (mysqli_query($connection, $sql)) {
	echo "New record created successfully";
} else {
	echo "<br> Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
