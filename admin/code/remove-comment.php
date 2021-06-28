<?php
    require "connection.php";

    $id = $_GET['id'];
    $login = $_COOKIE['log'];
    $article_id = $_GET['article_id'];

    $query = $connection -> query("SELECT * FROM `comments` WHERE `id` = '$id' AND `author` = '$login'");

    if ($query) 
        $connection -> query("DELETE FROM `comments` WHERE `id` = '$id' AND `author` = '$login'");

    header('location: /article.php?id='.$article_id);