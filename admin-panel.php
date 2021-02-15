<?php
require './includes/db.php';
$count = R::count('users');
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
		<div class="_container">
			<div class="admin-panel">
				<div class="admin-panel__row">
					<?php
					if ($count > 0) {
						$users = R::findAll('users');
						foreach ($users as $user) {
					?>
							<div class="admin-panel__profile">
								<div class="admin-panel__photo">
									<div class="admin-panel__avatar">
										<img src="./img/<?php echo $user['photo'] ?>" alt="" class="admin-panel__img">
									</div>
								</div>
								<div class="admin-panel__info">
									<div class="admin-panel__name">
										<?php echo $user['surname'] . ' ' .  $user['name'] . ' ' . $user['patronymic'] ?>
									</div>
									<div class="admin-panel__contacts">
										<div class="admin-panel__title-contacts">Контакты:</div>
										<ul class="admin-panel__list">
											<li>
												<a href="tel:<?php echo $user['number'] ?>" class="admin-panel__link"><?php echo $user['number'] ?></a>
											</li>
											<li>
												<a href="mailto:<?php echo $user['email'] ?>" class="admin-panel__link"><?php echo $user['email'] ?></a>
											</li>
										</ul>
										<form method="POST" action="./query.php" class="admin-panel__form">
											<div class="adminpanel__controlers">
												<select name="status" id="status" class="admin-panel__select">
													<?php
													if ($user['status'] == 'user') {
													?>
														<option value="user" selected>Пользователь</option>
														<option value="admin">Администратор</option>
													<?php
													} else {
													?>
														<option value="user">Пользователь</option>
														<option value="admin" selected>Администратор</option>
													<?php
													}
													?>
												</select>

												<select name="condition" id="condition" class="admin-panel__select">
													<?php
													if ($user['condition_account'] == 'acting') {
													?>
														<option value="acting" selected>Действующий</option>
														<option value="block">Заблокированный</option>
													<?php
													} else {
													?>
														<option value="acting">Действующий</option>
														<option value="block" selected>Заблокированный</option>
													<?php
													}
													?>

												</select>
											</div>

											<button class="admin-panel__subbmit btn" type="submit" name="btn" value="<?php echo $user['id'] ?>">Изменить статус пользователя</button>
										</form>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
</body>

</html>