<?php
    // вся процедура працює на сесіях. Саме в ній зберігаються дані користувача, поки він знаходиться на сайті. Дуже важливо запустити їх на самому початку сторінки !!!
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Вхід на сайт</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  

<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('../img/background/rainbow.svg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="testreg.php" method="post">
                

                <div class="wrap-input100 validate-input m-b-25" >
                    <?php
    session_start();//  вся процедура працює на сесіях. Саме в ній зберігаються дані користувача, поки він знаходиться на сайті. Дуже важливо запустити їх на самому початку сторінки !!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносимо введений користувачем логін в змінну $ login, якщо він порожній, то знищуємо змінну
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //
if (empty($login) or empty($password)) //якщо користувач не ввів логін або пароль, то видаємо помилку і зупиняємо скрипт
    {
        exit ("Ви ввели не всю інформацію, поверніться <a href='index.php'>назад</a> і заповніть всі поля! ");
    }
    //якщо логін і пароль введені, то обробляємо їх, щоб теги і скрипти не працювали, хіба мало що люди можуть ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("bd.php");// файл bd.php повинен бути в тій же папці, що і всі інші, якщо це не так, то просто змініть шлях
 
$result = mysqli_query($db, "SELECT * FROM user WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
 $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    //якщо користувача з введеним логіном не існує
    exit ("Вибачте, введений вами login або пароль невірний, поверніться <a href='index.php'>назад</a>");
    }
    else {
    //якщо існує, то звіряємо паролі
    if ($myrow['password']==$password) {
    //якщо паролі збігаються, то запускаємо користувачеві сесію! Можете його привітати, він увійшов!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
      $_SESSION['name']=$myrow['name'];
        $_SESSION['subname']=$myrow['subname'];//ці дані дуже часто використовуються, ось їх і буде "носити з собою" увійшов користувач
    echo "Ви успішно увійшли на сайт! <a href='../index.php'> Головна сторінка</a>";
    }
 else {
    //якщо паролі не зійшлися

    exit ("Вибачте, введений вами login або пароль невірний.");
    }
    }
    ?>
                    <span class="focus-input100"></span>
                </div>


                <div class="text-center p-t-57 p-b-20">
                    
                </div>

            

               
            </form>

            
        </div>
    </div></body>
</html>
