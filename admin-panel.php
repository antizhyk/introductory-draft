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
			<div class="admin-panel">
				<div class="admin-panel__row">
					<div class="admin-panel__profile">
						<div class="admin-panel__photo">
							<div class="admin-panel__avatar">
								<img src="./img/ogromnyy-kosmicheskiy-korabl-budushhego.jpg" alt="" class="admin-panel__img">
							</div>
						</div>
						<div class="admin-panel__info">
							<div class="admin-panel__name">
								Матвиенко Александр Олегович
							</div>
							<div class="admin-panel__contacts">
								<div class="admin-panel__title-contacts">Контакты:</div>
								<ul class="admin-panel__list">
									<li>
										<a href="tel:+380997103208" class="admin-panel__link">+380997103208</a>
									</li>
									<li>
										<a href="mailto:sashamatvienk0@gmail.com" class="admin-panel__link">sashamatvienk0@gmail.com</a>
									</li>
								</ul>
								<form method="POST" action="" class="admin-panel__form">
									<div class="adminpanel__controlers">
										<select name="status" id="status" class="admin-panel__select">
											<option value="user">Пользователь</option>
											<option value="admin">Администратор</option>
										</select>

										<select name="condition" id="condition" class="admin-panel__select">
											<option value="action">Действующий</option>
											<option value="block">Заблокированный</option>
										</select>
									</div>

									<button class="admin-panel__subbmit btn" type="submit">Изменить статус пользователя</button>
								</form>
							</div>
						</div>
					</div>
					<div class="admin-panel__profile">
						<div class="admin-panel__photo">
							<div class="admin-panel__avatar">
								<img src="./img/ogromnyy-kosmicheskiy-korabl-budushhego.jpg" alt="" class="admin-panel__img">
							</div>
						</div>
						<div class="admin-panel__info">
							<div class="admin-panel__name">
								Матвиенко Александр Олегович
							</div>
							<div class="admin-panel__contacts">
								<div class="admin-panel__title-contacts">Контакты:</div>
								<ul class="admin-panel__list">
									<li>
										<a href="tel:+380997103208" class="admin-panel__link">+380997103208</a>
									</li>
									<li>
										<a href="mailto:sashamatvienk0@gmail.com" class="admin-panel__link">sashamatvienk0@gmail.com</a>
									</li>
								</ul>
								<form method="POST" action="" class="admin-panel__form">
									<div class="adminpanel__controlers">
										<select name="status" id="status" class="admin-panel__select">
											<option value="user">Пользователь</option>
											<option value="admin">Администратор</option>
										</select>

										<select name="condition" id="condition" class="admin-panel__select">
											<option value="action">Действующий</option>
											<option value="block">Заблокированный</option>
										</select>
									</div>

									<button class="admin-panel__subbmit btn" type="submit">Изменить статус пользователя</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>

</html>