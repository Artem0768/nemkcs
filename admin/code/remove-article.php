<?php
    require "connection.php";

    
    $article_id = $_GET['id'];

    $query = $connection -> query("SELECT * FROM `articles` WHERE `id` = '$article_id' ");

    if ($query) {
        $connection -> query("DELETE FROM `articles` WHERE `id` = '$article_id' ");
    }

    header('location: /admin');