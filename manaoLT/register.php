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
    <title> Регистрация нового пользователя </title>
</head>
<body>
    
<!--    Регистрация -->
 
<form>
        <label> Фамилия </label>
    <input type = "text" class = "surname" name = "surname" placeholder= "Введите фамилию">
        <label> Имя </label>
    <input type = "text" class = "name" name = "name" placeholder= "Введите имя">
        <label> Почта </label>
    <input type = "email" class = "email" name = "email" placeholder= "Введите почту">
        <label> Логин </label>
    <input type = "text" class = "login" name = "login" placeholder= "Введите логин">
        <label> Пароль </label>
    <input type = "password" class = "password" name = "password" placeholder= "Введите пароль">
        <label> Подтверждение пароля </label>
    <input type = "password" class = "confirm_password" name = "confirm_password" placeholder= "Подтвердите пароль">
    <button class = button-register> Зарегистрироваться </button>
    <p>
        Вы уже зарегестрированы? <a href="index.php"> Войти  </a>
    </p>

    <p class = "msg default"> Ошибка </p>

</form>


<script src="js/jquery.js"> </script>
<script src="js/mainScript.js"> </script>




</body>
</html>