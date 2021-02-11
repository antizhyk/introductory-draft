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
				<form method="GET" action="" class="form">
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
						<div class="form__item">
							<label class="form__label" for="password">Пароль:</label>
							<input type="password" name="password" id="password" placeholder="Придумайте пароль" class="form__input ">
						</div>
						<div class="form__item form__item_file">
							<label class="form__label form__label_file" for="photo">Фото на автар:</label>
							<input type="file" name="photo" id="photo" multiple accept="image/jpeg,image/png">
						</div>
					</div>
					<button class="form__button registration__button" type="submit">Завершить регистрацию</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>