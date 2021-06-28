<?php
session_start(); ?>
<?php
    require "connection.php";

    $id_team = $_POST['idd'];
   
$_SESSION['id_team']=$id_team; 

    $id = $_SESSION['id'];
    

        $connection -> query("UPDATE `user` set id_team = $id_team WHERE id = $id");

        $connection -> query("UPDATE `teams` set num_of_user = num_of_user+1 WHERE id = $id_team");


        echo "ready";
