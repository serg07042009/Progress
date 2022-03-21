<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
   <link rel="stylesheet" type="text/css" href="style/style1.css">
</head>
<body>
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
      exit(header('Location: chat.php'));
      }
   }

?>
   <div class = "all">
      <header class="header"></header>
      <div class="menushka">
         <ul class="menu cf">
         <li><a href="index.php">Главная</a></li>
         <li>
            <a href="#">Мои проекты</a>
            <ul class="submenu">
               <li><a href="Дискоклаб/index.php">1</a></li>
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
         <form method="post">
            <div class ="block-left">
               <input type="text" name="name" placeholder="Введите своё имя"><br>
               <textarea name="chat" rows="6" placeholder="Введите сообщение"></textarea><br>
               <input type="submit" name="submit" value="Отправить"><br><br>
            </div>
         </form>
         <div class="block-right">
            <?php 
            $query2 = 'SELECT * FROM chat ORDER By time DESC LIMIT 50';
            $stmt = $connection->prepare($query2);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {      
            echo '<span>' .$row['name'] .' | ' .$row['time'] .'</span><br>' .$row['chat'] .'<br><hr><br>';
            print("\n");
         }

            ?>
         </div>
      </div>
      <footer class="footer"></footer>
   </div>
</body>
</html>