<!-- Страничка выхода из аккаунта -->
<?php
require './includes/db.php';
unset($_SESSION['logged_user']);
header('Location: /');
