//"vendor/authorization.php"

//Авторизация


$('button.button-login').on('click', function(event) {    
    event.preventDefault();
    

    let loginValue = $('input[name="login"]').val();
    let passwordValue = $('input[name="password"]').val();



    $.ajax({
        url: "vendor/authorization.php",
        method: "POST",
        dataType: 'text',
        data: {
            login: loginValue, 
            password: passwordValue
        },
        success(data){
            if ( JSON.parse(data).success){
                document.location.href = "/profile.php"
            } else
            {
                $('.msg').removeClass('default').text(JSON.parse(data).message);
            }
            // if (data === 'Авторизация прошла успешно')
            // {
            //     document.location.href = '/profile.php'
            // }
            // $('.msg').removeClass('default').text(data);
        }
    });
});



//  Регистрация


$('button.button-register').on('click', function(event) {    
    event.preventDefault();
    

    let surnameValue = $('input[name="surname"]').val();
    let nameValue = $('input[name="name"]').val();
    let emailValue = $('input[name="email"]').val();
    let loginValue = $('input[name="login"]').val();
    let passwordValue = $('input[name="password"]').val();
    let confirmPasswordValue = $('input[name="confirm_password"]').val();
    


    $.ajax({
        url: "vendor/registerUsers.php",
        method: "POST",
        dataType: 'text',
        data: {
            surname: surnameValue,
            name: nameValue,
            email: emailValue,
            login: loginValue, 
            password: passwordValue,
            confirm_password: confirmPasswordValue
        },
        success(data){
            if ( JSON.parse(data).success){
                document.location.href = "/index.php"
            } else
            {
                $('.msg').removeClass('default').text(JSON.parse(data).message);
            }
        }
    });
});
