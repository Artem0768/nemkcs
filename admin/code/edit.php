<?php
    require "connection.php";

    $title = $_POST['title'];
    $intro = $_POST['intro'];
    $text = $_POST['text'];
    $article_id = $_POST['id'];

    $query = $connection -> query("SELECT * FROM `articles` WHERE `id` = '$article_id' ");
    $error = '';
    if (strlen($title) < 10) $error = "Заголовок повинен містити не менше 10 символів";
    else if (strlen($intro) < 20) $error = "Інтро повинен містити не менше 20 символів";
    else if (strlen($text) < 30) $error = "Текст повинен містити не менше 30 символів";

    if ($error) {
        echo $error;
        exit();
    } else {
        $connection -> query("UPDATE `articles`  SET `title` = '$title', `intro` = '$intro', `text` = '$text'  WHERE `id` = '$article_id'");
        echo "ready";
    }
        