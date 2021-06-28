<?php
    require "connection.php";

    $login = $_POST['login'];
    $password = $_POST['password'];

    
    
    $query = $connection -> query("SELECT * FROM `admins` WHERE `login` = '$login' AND `password` = '$password'");
    
    $error = '';
    if (mysqli_num_rows($query) == 0) $error = "Вы ввели неверный логин или пароль";

    if ($error) {
        echo $error;
        exit();
    } else {
        setcookie("log", $login, time() + 3600, '/');
        echo "ready";
    }