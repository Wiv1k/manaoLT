<?php
    session_start();
    if (isset((!$_SESSION)['user']))
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title> Личный кабинет </title>
</head>
<body>
    
<!-- Профиль -->
 
<form action="vendor/authorization.php" method="post">
    <h2> <?= "Здравствуйте ", $_SESSION['user']['name'], " " , $_SESSION['user']['surname'] ?> </h2>
    <h2> <?= $_SESSION['user']['login'] ?> </h2>
    <a href="#"> <?= $_SESSION['user']['email'] ?> </a>
    <a href="vendor/logout.php" class = "logout"> Выход </a>
    <?php
        
    
    ?>
</form>




</body>
</html>