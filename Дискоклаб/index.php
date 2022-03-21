<?php 
	session_start();  
?>
<!DOCTYPE html>
<html>
<head>
	<metfa charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class = "all">
		<header class="header"></header>
		<div class="menushka">
			<ul class="menu cf">
			<li><a href="/v1/Zad3/index.php">Главная</a></li>
			<li>
				<a href="#">Мои проекты</a>
				<ul class="submenu">
			    	<li><a href="index.php">1</a></li>
			    	<li><a href="#">2</a></li>
			    	<li><a href="#">3</a></li>
			    	<li><a href="#">4</a></li>
			    </ul>
			</li>
			<li><a href="chat.php">Чат</a></li>
			<li><a href="#">Связаться со мной</a></li>
			</ul>
		</div>
		<div class="content">
			<form action="insite.php" method="post">
				<label>Кодовое слово</label>
				<input type="text" name="login" placeholder="Введите пароль">
				<button type="submit">Войти</button>
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