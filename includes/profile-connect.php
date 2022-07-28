<?php

    $con = mysqli_connect('localhost', 'root', '', 'tweets');
    
    if(!$con) {
        die('Помилка підключення до бази даних');
    }

?>