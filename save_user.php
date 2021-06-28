<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } // заносимо самі ввели логін в змінну $ login, якщо він порожній, то знищуємо змінну
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
   // заносимо самі ввели пароль в змінну $ password, якщо він порожній, то знищуємо змінну
   
 if (empty($login) or empty($password))// якщо користувач не ввів логін або пароль, то видаємо помилку і зупиняємо скрипт
    {
    exit ("Ви ввели не всю інформацію, поверніться назад і заповніть всі поля!");
    }
    // якщо логін і пароль введені, то обробляємо їх, щоб теги і скрипти не працювали, хіба мало що люди можуть ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //видаляємо зайві прогалини
    $login = trim($login);
    $password = trim($password);
 // підключаємося до бази
    include ("bd.php");//файл bd.php повинен бути в тій же папці, що і всі інші
 // перевірка на існування користувача з таким же логіном
$result = mysqli_query($db, "SELECT id FROM `users` WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Вибачте, введений вами логін вже зареєстрований. Введіть інший логін.");
    }
 // якщо такого немає, то зберігаємо дані
   $result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");  
    // Перевіряємо, чи є помилки
    if ($result2=='TRUE')
    {
    echo "Ви успішно зареєстровані! Тепер ви можете зайти на сайт. <a href='index.php'>Головна сторінка</a>";
    }
 else {
    echo "Помилка! Ви не зареєстровані.";
    }
    ?>