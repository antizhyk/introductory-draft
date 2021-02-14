<?php
require './includes/db.php';

$data = $_POST;
if (isset($data['do_signup'])) {
	$errors = array();
	if (trim($data['name']) === '') {
		$errors[] = 'Введите имя!';
	}
	if (trim($data['surname']) === '') {
		$errors[] = 'Введите фамилию!';
	}
	if (trim($data['patronymic']) === '') {
		$errors[] = 'Введите отчество!';
	}
	if (trim($data['email']) === '') {
		$errors[] = 'Введите email!';
	}
	if (trim($data['tel']) === '') {
		$errors[] = 'Введите номер телефона!';
	}
	if ($data['password'] === '') {
		$errors[] = 'Введите пароль!';
	}
	if ($data['password_2'] !== $data['password']) {
		$errors[] = 'Пароли не совпадают!';
	}
	if (move_uploaded_file($_FILES['photo']['tmp_name'], 'img/' . $_FILES['photo']['name'])) {
	} else {
		$errors[] = 'Файл не загружен!';
	}
	if (R::count('users', "login = ?", array($data['login'])) > 0) {
		$errors[] = 'Пользователь с таким логином существует';
	}
	if (R::count('users',  "email = ?", array($data['email'])) > 0) {
		$errors[] = 'Пользователь с таким email существует';
	}
	if (empty($errors)) {
		$user = R::dispense('users');
		$user->name = $data['name'];
		$user->surname = $data['surname'];
		$user->patronymic = $data['patronymic'];
		$user->email = $data['email'];
		$user->number = $data['tel'];
		$user->photo = $_FILES['photo']['name'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);
		header('Location: /index.php');
	} else {
		echo '<div style="color: red;">' . array_shift($errors) . '</div>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div class="wrapper">
		<div class="subcontainer">
			<div class="sub-wrapper registration">
				<h1 class="title">Регистрация аккаунта</h1>
				<form method="POST" action="/registration.php" class="form" enctype="multipart/form-data">
					<div class="form__inputs">
						<div class="form__item">
							<label class="form__label" for="name">Имя:</label>
							<input type="text" name="name" id="name" placeholder="Введите ваше имя" class="form__input " value="<?php echo @$data['name']; ?>">
						</div>
						<div class=" form__item">
							<label class="form__label" for="surname">Фамилия:</label>
							<input type="text" name="surname" id="surname" placeholder="Введите вашу фамилию" class="form__input" value="<?php echo @$data['surname']; ?>">
						</div>
						<div class=" form__item">
							<label class="form__label" for="patronymic">Отчество:</label>
							<input type="text" name="patronymic" id="patronymic" placeholder="Введите ваше отчество" class="form__input " value="<?php echo @$data['patronymic']; ?>">
						</div>
						<div class=" form__item">
							<label class="form__label" for="email">E-mail:</label>
							<input type="email" name="email" id="email" placeholder="Введите ваш e-mail" class="form__input " value="<?php echo @$data['email']; ?>">
						</div>
						<div class=" form__item">
							<label class="form__label" for="tel">Моб. телефон:</label>
							<input type="tel" name="tel" id="tel" placeholder="Введите ваш моб. телефон" class="form__input " value="<?php echo @$data['tel']; ?>">
						</div>
						<div class=" form__item">
							<label class="form__label" for="password">Пароль:</label>
							<input type="password" name="password" id="password" placeholder="Придумайте пароль" class="form__input ">
						</div>
						<div class="form__item">
							<label class="form__label" for="password_2">Повторите пароль:</label>
							<input type="password" name="password_2" id="password_2" placeholder="Повторно введите пароль" class="form__input ">
						</div>
						<div class="form__item form__item_file">
							<label class="form__label form__label_file" for="photo">Фото на автар:</label>
							<input type="file" name="photo" id="photo" multiple accept="image/jpeg,image/png">
						</div>
					</div>
					<button class="form__button registration__button" name="do_signup" type="submit">Завершить регистрацию</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>