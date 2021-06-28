<?php
    $connection = mysqli_connect("127.0.0.1", "root", "", "nemk");
    if (!$connection) { echo "Помилка з'єднання"; exit(); }