<?php

    require_once 'connect.php';
    
    $login = htmlspecialchars(trim($_POST['login']));
    $name = htmlspecialchars(trim($_POST['name']));
    $pass = htmlspecialchars(trim($_POST['pass']));

    if(mb_strlen($login) < 5 || mb_strlen($login) > 20) {
        die('Допустимий логін від 5 до 20 символів');
    } else if(mb_strlen($name) < 5 || mb_strlen($name) > 20) {
        die("Допустимe ім'я від 5 до 20 символів");
    } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 20) {
        die('Допустимий пароль від 5 до 20 символів');
    }


    $pass = md5($pass);
    
    mysqli_query($connect, "INSERT INTO `users` (`login`, `name`, `pass`) VALUES ('$login', '$name', '$pass')");

    header('Location: ../index.html');

?>