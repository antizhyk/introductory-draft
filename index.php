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
				<form method="GET" action="./cabinet.php" class="entry__form form">
					<div class="form__inputs">
						<input type="text" name="login" placeholder="Введите email" class="form__input ">
						<input type="password" name="password" placeholder="Введите пароль" class="form__input ">
					</div>
					<div class="entry__buttons">
						<a href="./registration.php" class="entry__register form__button">Зарегистрироваться</a>
						<button class="form__button" type="submit">Войти</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</body>

</html>