<!-- Личный кабинет -->
<?php
require './includes/db.php';
$account = R::findOne('users', "`id` = ?", [$_SESSION['logged_user']['id']]);/* Получение данных пользователя по id */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div class="wrapper">
		<div class="_container">
			<div class="sub-wrapper sub-wrapper__cabinet">
				<div class="cabinet">
					<div class="cabinet__photo">
						<div class="cabinet__avatar">
							<img src="./img/<?php echo $account['photo'] ?>" alt="" class="cabinet__img">
						</div>
					</div>
					<div class="cabinet__info">
						<div class="cabinet__name">
							<?php echo $account['surname'] . ' ' . $account['name'] . ' ' . $account['patronymic'] ?>
						</div>
						<div class="cabinet__contacts">
							<div class="cabinet__title-contacts">Контакты:</div>
							<ul class="cabinet__list">
								<li>
									<a href="tel:<?php echo $account['number'] ?>" class="cabinet__link"><?php echo $account['number'] ?></a>
								</li>
								<li>
									<a href="mailto:<?php echo $account['email'] ?>" class="cabinet__link"><?php echo $account['email'] ?></a>
								</li>
							</ul>
						</div>
						<div class="cabinet__buttons">
							<a href="./logout.php" class="cabinet__btn btn">Выйти</a>
							<a href="./editor.php" class="cabinet__btn btn">Изменить данные</a>
							<?php
							if ($account['status'] == 'admin') {
							?>
								<a href="./admin-panel.php" class="cabinet__btn btn">Управление аккаунтами</a>
							<?php
							}
							?>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</body>

</html>