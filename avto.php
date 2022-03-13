<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="registr.php" method="post">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<label>Подтверждение пароля</label>
		<input type="password" name="password2" placeholder="Введите пароль">
		<button>Создать аккаунт</button>
		<p>У вас уже есть аккаунт? <a href="1.php">Войти!</a></p>
		<p class="msg">
			<?php
			if (isset($_SESSION['message'])) {
			 echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
			?>
		</p>
	</form>
</body>
</html>