<?php 
	session_start();
	require_once 'connect.php';

 	$login = $_POST['login'];
 	$password = $_POST['password'];
 	$array = [
 			'log' => $login,
 			'pas' => $password,
 		];
 	$query = "SELECT * FROM user WHERE login = :log AND password = :pas";
 	$stmt = $connection->prepare($query);
 	$stmt->execute($array);	
 	$category = $stmt->fetch(PDO::FETCH_LAZY);
	if ($category == "") {
		$_SESSION['message'] ='Пароль или логин не совпадают';
 		header('Location: index.php');
	}
	else{
		header('Location: chat.php');
	}
?>