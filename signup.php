<?php
// Start the session
session_start();
require_once 'connection.php'; //підключення скрипту

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` 
    (`id`, `first_name`, `last_name`, `password`, `login`, `id_role`) 
    VALUES (NULL, '$first_name', '$last_name', '$password', '$login', '')");
    echo "Authrization went successfully";
    header('Location: login.php');
?>

