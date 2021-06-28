<?php
    require "connection.php";

    $login = $_POST['login'];
    $password = $_POST['password'];

    $error = '';
    if (strlen($login) < 3) $error = "Логин должен содержать не менее 3 символов";
    else if (strlen($password) < 8) $error = "Пароль должен содержать не менее 8 символов";
    else if (mysqli_num_rows($connection -> query("SELECT * FROM `users` WHERE `login` = '$login'")) != 0) $error = "Такой логин уже занят";

    if ($error) {
        echo $error;
        exit();
    }

    

    $connection -> query("INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')");
    echo "ready";