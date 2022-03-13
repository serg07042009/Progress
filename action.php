<?php 
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
		$date = date("d.m.Y");
		$file = $name. '<br>' .$chat. "<br>Было отправлено:" .$date. '<hr>';
		file_put_contents('array.txt', $file."\n".file_get_contents('array.txt'));
	}include('array.txt');
	}

?>