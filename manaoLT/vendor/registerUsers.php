<?php
    session_start();

    function hasSpace($hasSpace)  
    {
        if (strpos($hasSpace, " ") !== false)
        {
            die ('Поля ввода не должны содержать пробелы');
        }
    }

        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        


        // Проверка на содержание пробела в полях ввода 
        hasSpace($name);
        hasSpace($surname);
        hasSpace($login);
        hasSpace($password);
        hasSpace($email); 
        
        
        // Фамилия должна содержать больше 2 символов
        if(strlen($surname) < 2)
        {
        die ('{"success": false,"message": "Фамилия должна содержать больше 2 символов"}');
        }
        
        // Имя должно содержать больше 2 символов
        if(strlen($name) < 2)
        { 
            die ('{"success": false,"message": "Имя должно содержать больше 2 символов"}');
        }
        
        
    // Проверить ввод адреса без точки в доменной части (admin@mailru).
    
    if (!preg_match('/^[a-zA-Z0-9.]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/', $email))
    {
        die ('{"success": false,"message": "Адрес введен некоректно"}');
    }
    
    // Логин должен содержать больше 6 символов
    if(strlen($login) < 6)
    {
        die ('{"success": false,"message": "Логин должен содержать больше 6 символов"}');
    }
    
    // Пароль должен содержать больше 6 символов
    if(strlen($password) < 6)
    {
        die ('{"success": false,"message": "Пароль должен содержать больше 6 символов"}');
    }
    
    
    // Проверка на содержание ТОЛЬКО ЦИФР в пароле
    if(is_numeric($password))
    {
        die ('{"success": false,"message": "Пароль не дорлжен содержать только цифры"}');
    }
    // Проверка на содержание ТОЛЬКО БУКВ в пароле
    if(ctype_alpha($password))
    {
        die ('{"success": false,"message": "Пароль не дорлжен содержать только буквы"}');
    }        
    
    // Проверка на содержание спец символов в пароле
    if (preg_match('/[^a-zA-Z0-9]/', $password))
    {
        die ('{"success": false,"message": "Пароль не дорлжен содержать спец символы"}');
    }
        
        
    $users = json_decode(file_get_contents('users.json'), true );

        foreach ($users as $id)
        {
        if ($id['login'] === $login)
        {
            die ('{"success": false,"message": "Пользователь с таким логином зарегистророван"}');
        }
        if ($id['email'] === $email)
        {
            die ('{"success": false,"message": "Половьзатель с таким email зарегистророван"}');
        }
    }
        

            if ($password !== $confirm_password)
            {
                die ('{"success": false,"message": "Пароли не совпадают"}');
            }



    $id = uniqid();
    $password = md5("соль" . $password);
    $users[] = array(
        'id' => $id,
        'email' => $email,
        'login' => $login,
        'surname' => $surname,
        'name' => $name,
        'password' => $password
    );
    file_put_contents ('users.json', json_encode($users));
    die ('{"success": true,"message": "Регистрация прошла успешно!"}');
?>




