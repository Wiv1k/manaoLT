<?php

session_start();
$login = $_POST['login'];
$password = md5('соль' . $_POST['password']);

$users = json_decode(file_get_contents('users.json'), true);

$j = 0;

for ($i = 0; $i < count($users); $i++)
{
    if (($users[$i]['login'] === $login && $users[$i]['password'] === $password) != 1)
    {
        $j++;
            if(count($users) == $j)
        {
            echo '{"success": false,"message": "Непраильный логин или пароль"}';
        }
    }
    else
    {
        $user = $users[$i];
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "email" => $user['email'],
            "login" => $user['login']
        ];

        echo '{"success": true,"message": "Авторизация прошла успешно"}';
    }
}






?>