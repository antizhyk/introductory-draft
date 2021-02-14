<?php
require './includes/db.php';

$data = $_POST;
if (isset($data['do_login'])) {
	$errors = array();
	$user = R::findOne('users', 'email = ?', array($data['email']));
	if ($user) {
		if (password_verify($data['password'], $user->password)) {
			if ($user->condition_account == 'acting') {
				$_SESSION['logged_user'] = $user;
				header('Location: /cabinet.php');
			} else {
				$errors[] = 'Пользователь заблокирован';
			}
		} else {
			$errors[] = 'Неверно введен пароль';
		}
	} else {
		$errors[] = 'Пользователь с таким email не найден';
	}
	if (!empty($errors)) {
		echo '<div style="color: red; text-align:center; font-size: 18px;">' . array_shift($errors) . '</div>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project</title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div class="wrapper">
		<div class="subcontainer">
			<div class="entry sub-wrapper">
				<h1 class="title">Добро пожаловать!</h1>
				<form method="POST" action="/index.php" class="entry__form form">
					<div class="form__inputs">
						<input type="text" name="email" placeholder="Введите email" class="form__input ">
						<input type="password" name="password" placeholder="Введите пароль" class="form__input ">
					</div>
					<div class="entry__buttons">
						<a href="./registration.php" class="entry__register form__button">Зарегистрироваться</a>
						<button class="form__button" type="submit" name="do_login">Войти</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</body>

</html>