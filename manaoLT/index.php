<?php
    session_start();

    if (isset($_SESSION['user']))
    {
        header('Location: profile.php');
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title> Авторизация пользователя </title>
</head>
<body>
    
<!-- Авторизация -->
 
<form>
    <label> Логин </label>
    <input type = "text" name = "login" placeholder= "Введите логин">
    <label> Пароль </label>
    <input type = "password" name = "password" placeholder= "Введите пароль">
    <button type = "submit" class="button-login"> Войти </button>
    <p>
        У вас нет аккаунта? <a href="register.php"> Зарегистрироваться </a>
    </p>

    <p  class = "msg default">  Введите логин и пароль </p>

</form>

    <script src="js/jquery.js"> </script>
    <script src="js/mainScript.js"> </script>









</body>
</html>