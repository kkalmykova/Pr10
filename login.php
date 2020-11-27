<?php
    session_start (); 

   /*if (!isset ($_GET ['go'])){ 
      echo "<form method='POST' name='authorization' action='auth.php'>
         Login:&nbsp&nbsp <input type='text' name='login'><br>
         Password: <input type='password' name='password'><br>
         <input type='submit' value='Submit'>
     </form>";
   } 
   else { 
      echo "Do not have an account?<br> "; 
	  echo "Registration<br> "; 
	  echo "<input type='submit' value='Registration'>
	  </form>";
	  header ("Location: register.php");
	  
	  
   } */
   ?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
<p> Authorization </p>
   <form action="auth.php" method="post">
   <div class="input-field">
          <input placeholder="Enter login" id="login" type="text" name="login" >
          <label for="login" class="active">Login</label>
        </div>
    <div class="input-field">
          <input placeholder="Enter password" id="password" type="password" name="password">
          <label for="password" class="active">Password</label>
        </div>
       <input type="submit" class="btn">
   </form>

<p>Do not have an account ?</p><a class="waves-effect waves-light btn-small" href = "register.php">Registration</a>
</div>
</body>
</html>