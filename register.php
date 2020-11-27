<?php
// Start the session
session_start();
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
<p> Registration </p>
   <form action="signup.php" method="post">
   <div class="input-field">
          <input placeholder="Enter first name" id="first_name" type="text" name="first_name" >
          <label for="first_name" class="active">First name</label>
        </div>
    <div class="input-field">
          <input placeholder="Enter last name" id="last_name" type="text" name="last_name" >
          <label for="last_name" class="active">Last name</label>
        </div>
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
</div>

</body>
</html>