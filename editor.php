<!-- Форма для изменения данных -->
<?php
require './includes/db.php';

$data = $_POST;
$status = false;


if (isset($data['do_signup'])) {
	/* Проверка полей ввода и добавление их в bean*/
	$errors = array();
	if (R::count('users', "login = ?", array($data['login'])) > 0) {
		$errors[] = 'Пользователь с таким логином существует';
	}
	if (R::count('users',  "email = ?", array($data['email'])) > 0) {
		$errors[] = 'Пользователь с таким email существует';
	}
	if (empty($errors)) {
		$user = R::findOne('users', "`id` = ?", [$_SESSION['logged_user']['id']]);/* Подключение к таблице и получение данных пользователя в виде bean (объекта) */
		if (trim($data['name']) !== '') {
			$user['name'] = $data['name'];
		}
		if (trim($data['surname']) !== '') {
			$user['surname'] = $data['surname'];
		}
		if (trim($data['patronymic']) !== '') {
			$user['patronymic'] = $data['patronymic'];
		}
		if (trim($data['email']) !== '') {
			$user['email'] = $data['email'];
		}
		if (trim($data['tel']) !== '') {
			$user['tel'] = $data['tel'];
		}
		if (trim($data['photo']) !== '') {
			if (move_uploaded_file($_FILES['photo']['tmp_name'], 'img/' . $_FILES['photo']['name'])) {/* Загрузка картинки */
			} else {
				$errors[] = 'Файл не загружен!';
			}
			$user['photo'] = $data['photo'];
		}
		/* ===================== */
		R::store($user);/* Сохранение значений в таблице */
		$status = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Изменить данные</title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<header class="header">
		<div class="_container">
			<div class="header__row">
				<div class="header__btn header__btn_exit">
					<a href="./logout.php" class="header__link" href="">Выход</a>
				</div>
				<div class="header__btn"><a class="header__link" href="./cabinet.php">Личный кабинет</a></div>
			</div>
		</div>
	</header>
	<div class="wrapper">
		<div class="subcontainer">
			<div class="sub-wrapper registration">
				<h1 class="title">Изменить данные</h1>
				<?php
				if ($status) {
					echo '<div style="color:red; text-align: center; line-height: 24px;">Данные успешно изменены</div>';
				}
				if (isset($errors)) {
					echo '<div style="color:red; text-align: center; line-height: 24px;">' . array_shift($errors) . '</div>';
				}
				?>
				<form method="POST" action="./editor.php" class="form">
					<div class="form__inputs">
						<div class="form__item">
							<label class="form__label" for="name">Имя:</label>
							<input type="text" name="name" id="name" placeholder="Введите ваше имя" class="form__input ">
						</div>
						<div class="form__item">
							<label class="form__label" for="surname">Фамилия:</label>
							<input type="text" name="surname" id="surname" placeholder="Введите вашу фамилию" class="form__input ">
						</div>
						<div class="form__item">
							<label class="form__label" for="patronymic">Отчество:</label>
							<input type="text" name="patronymic" id="patronymic" placeholder="Введите ваше отчество" class="form__input ">
						</div>
						<div class="form__item">
							<label class="form__label" for="email">E-mail:</label>
							<input type="email" name="email" id="email" placeholder="Введите ваш e-mail" class="form__input ">
						</div>
						<div class="form__item">
							<label class="form__label" for="tel">Моб. телефон:</label>
							<input type="tel" name="tel" id="tel" placeholder="Введите ваш моб. телефон" class="form__input ">
						</div>
						<div class="form__item form__item_file">
							<label class="form__label form__label_file" for="photo">Фото на автар:</label>
							<input type="file" name="photo" id="photo" multiple accept="image/jpeg, image/png">
						</div>
					</div>
					<button class="form__button registration__button" name="do_signup" type="submit">Изменить</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>