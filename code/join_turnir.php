<?php
session_start(); ?>
<?php
    require "connection.php";

    $id_turnir = $_POST['idd'];
   
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM user WHERE id = $id";

    $result = $connection->query($sql);
   
    $row = $result->fetch_array();
         
    $id_team = $row["id_team"];
        
    
    $connection -> query("UPDATE `teams` set id_turnir = $id_turnir WHERE id = $id_team");


    echo "ready";
