<?php 
//PDO
$host = 'localhost';
$db = 'registr';
$user = 'root';
$pass = '';
try {
	$connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} 
catch(PDOException $e){
		echo "Connection failed:" .$e->getMessage();
	}
?>