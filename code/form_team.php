<?php
    require "connection.php";

    $name = $_POST['name'];
    $info = $_POST['info'];
  
    
        $connection -> query("INSERT INTO `teams` (`name`, `info`) VALUES ('$name', '$info')");
        echo "ready";
