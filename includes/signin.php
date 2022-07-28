<?php 

    session_start();
    require_once 'connect.php';

    $login = htmlspecialchars(trim($_POST['login']));
    $pass = md5(htmlspecialchars(trim($_POST['pass'])));

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "login" => $user['login']
        ];

        header('Location: profile.php');

    } else {
        echo 'Невірний логін або пароль';
        
    }

?>