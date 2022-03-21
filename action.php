<?php 
	session_start();
	require_once 'connect.php';

	if (isset($_POST['submit'])) {
		if ($_POST['name'] =="") {
		echo "Заполни полностью!!";
		exit();
	}
	elseif($_POST['chat'] == ""){
		echo "Заполни полностью!!";
		exit();
	}
	else{
		$name = $_POST['name'];
		$chat = $_POST['chat'];
		$array = [
 			'name' => $name,
 			'chat' => $chat,
 			
 		];
 		$query = "INSERT chat (id, name, chat, time) VALUES ('', :name, :chat, NOW())";
 		$stmt = $connection->prepare($query);
 		$stmt->execute($array);
		  $query2 = mysqli_query($connection, "SELECT * FROM chat ORDER By 'time' DESC LIMIT '50'");

		           while ($row = mysqli_fetch_assos($query2)){
		             echo '<span>' .$row['name'] .'|' .$row['time'] .'</span>' .$row['chat'];
		             // print_r($row); 
		            }
 		}
	}

?>