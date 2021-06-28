<?php
    require "connection.php";

    $text = $_POST['text'];
    $author = $_COOKIE['log'];
    $id = $_GET['id'];

    $connection -> query("INSERT INTO `comments` (`author`, `text`, `article_id`) VALUES ('$author', '$text', '$id')");
    header('location: /article.php?id='.$id);