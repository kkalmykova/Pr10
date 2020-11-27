<?php
   // Start the session
   session_start();
   $_SESSION['auth'] = false;
   require_once 'connection.php'; 

   $login = $_POST['login'];
   $password = md5($_POST['password']);
   $sql = "SELECT login, password FROM users";
   $result = $connect->query($sql);
   if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         if($login == $row["login"] && $password == $row["password"]){
            $_SESSION['auth'] = true;
            
         } 
     }
  }
  header('Location: restricted.php');
   ?>