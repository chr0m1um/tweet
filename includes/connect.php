<?php

    $connect = mysqli_connect('localhost', 'root', '', 'registration');
    
    if(!$connect) {
        die('Помилка підключення до бази даних');
    }

?>