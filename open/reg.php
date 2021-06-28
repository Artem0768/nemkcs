

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
            <form class="login100-form validate-form" action="" method="post" name="doGo">
                <span class="login100-form-title p-b-37" class="">
                    Реєстрація
                </span>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Введіть ім'я">
                    <input class="input100" type="text" name="name" placeholder="Введіть ваше ім'я " size="15"  maxlength="15" minlength="4">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Введіть прізвище">
                    <input class="input100" type="text" name="subname" placeholder=" Введіть ваше прізвище" size="15"  maxlength="15" minlength="4">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Введіть логін ">
                    <input class="input100" type="text" name="login" placeholder="Введіть логін " size="15"  maxlength="15" minlength="4">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Введіть пароль">
                    <input class="input100" type="password" name="password" placeholder=" Введіть пароль" minlength="6">
                   
                </div>
                <div class="wrap-input100 validate-input m-b-25" data-validate = "Введіть пароль повторно">
                    <input class="input100" type="password" name="pass_rep" placeholder=" Введіть пароль повторно" minlength="6">
                   
                </div>

            

                

            

                <div class="container-login100-form-btn">
                   <input class="login100-form-btn" type="submit" name="submit" value="Зареєструватись">
                   
                </div>
                <div>
                   </div>
            </form>

          <?php
                     if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    if (isset($_POST['subname'])) { $subname=$_POST['subname']; if ($subname =='') { unset($subname);} }
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносимо введений користувачем логін в змінну $ login, якщо він порожній, то знищуємо змінну
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
   
    if (isset($_POST['pass_rep'])) { $pass_rep=$_POST['pass_rep'] ;  }
    //заносимо введений користувачем   повторний пароль в змінну $ pass_rep, якщо він не однозначний паролю, то знищуємо змінну
 if (empty($login) or empty($password) or empty($name) or empty($subname)) //якщо користувач не ввів логін або пароль, то видаємо помилку і зупиняємо скрипт
    {
    exit ("Ви ввели не всю інформацію, заповніть всі поля!");
    }
     if ($pass_rep !== $password) //якщо користувач не ввів логін або пароль, то видаємо помилку і зупиняємо скрипт
    {
    exit ("Паролі не збігаються!");
    }
    //якщо логін і пароль введені, то обробляємо їх, щоб теги і скрипти не працювали, хіба мало що люди можуть ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $subname = stripslashes($subname);
    $subname = htmlspecialchars($subname);
    
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);
 
    include ("bd.php");
$result = mysqli_query($db, "SELECT id FROM `user` WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Вибачте, введений вами логін вже зареєстрований. Введіть інший логін.");
    }
 
   $result2 = mysqli_query ($db, "INSERT INTO user (name, subname, login, password) VALUES('$name','$subname','$login','$password')");  
   
    if ($result2=='TRUE')
    {
    echo "Ви успішно зареєстровані! Тепер ви можете зайти на сайт. <a href='index.php'>Головна сторінка</a>";
    }
 else {
    echo "Помилка! Ви не зареєстровані.";
    }
    ?>
        </div>

    </div>

    
    


    
<!--===============================================================================================-->


</body>
</html>