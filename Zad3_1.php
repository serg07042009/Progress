<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
   <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 <form method="post">
 <div class ="block-left">
 	<input type="text" name="name" placeholder="Введите своё имя"><br>
 	<textarea name="chat" rows="6" placeholder="Введите сообщение"></textarea><br>
 	<input type="submit" name="submit" value="Отправить"><br><br>
 </div>
 </form>
 <div class="block-right">
 <?php 
    include('action.php')   
  ?>
  </div>
</body>
</html>