<?php 
	session_start();  
?>
<!DOCTYPE html>
<html>
<head>
	<metfa charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style2.css">
</head>
<body>
	<div class = "all">
		<header class="header"></header>
		<div class="content">
			<form action="insite.php" method="post">
				<label>Логин</label>
				<input type="text" name="login" placeholder="Введите логин">
				<label>Пароль</label>
				<input type="password" name="password" placeholder="Введите пароль"><br>
				<button type="submit">Войти</button>
				<p>У вас нет аккаунта? <a href="avto.php">Зарегистрируйтесь!</a></p>
					<p class="msg">
					<?php
					if (isset($_SESSION['message'])) {
					 echo $_SESSION['message'];
					unset($_SESSION['message']);
				}
					?>
				</p>
			</form>
		</div>
		<footer class="footer"></footer>
	</div>
</body>
</html>