<?php 
	session_start();
	require_once 'connect.php';
	$id = 'NULL';
	$login = $_POST['login'];
 	$password = $_POST['password'];
 	$password2 = $_POST['password2'];
 	if ($password == $password2) {
 		$array = [
 			'i' => $id,
 			'log' => $login,
 			'pas' => $password,
 			'pas2' => $password2
 		];
 		$query = "INSERT user (id, login, password, password2) VALUES (:i, :log, :pas, :pas2)";
 		$stmt = $connection->prepare($query);
 		$stmt->execute($array);
 		$_SESSION['message'] ='Регитрация прошла успешно!';
 		header('Location: 1.php');

 	}
 	else{
 		$_SESSION['message'] ='Пароли не совпадают ';
 		header('Location: avto.php');
 	}
 ?>
