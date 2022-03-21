<?php 
	session_start();
	$login = $_POST['login'];
	if ($login == 'Люблю Ксюшу') {
		header('Location: Veseluha.php');
	}
	else{
			$_SESSION['message'] ='Пароль не верный';
 		header('Location: index.php');
	}
?>