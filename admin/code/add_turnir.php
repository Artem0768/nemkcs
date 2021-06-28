<?php
    require "connection.php";

    $name = $_POST['name'];
    
    $date = $_POST['date'];
    $prize = $_POST['prize'];
    

    
        $connection -> query("INSERT INTO `turnirs` (`name`, `date_start`, `prize`) VALUES ('$name',  '$date', '$prize')");
        echo "ready";
    