<?php
    //вся процедура працює на сесіях. Саме в ній зберігаються дані користувача, поки він знаходиться на сайті. Дуже важливо запустити їх на самому початку сторінки !!!
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
				<span class="login100-form-title p-b-37">
					Увійти
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Введіть логін або email">
					<input class="input100" type="text" name="login" placeholder="логін або email" size="15"  maxlength="15">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Введіть пароль">
					<input class="input100" type="password" name="password" placeholder="Пароль">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					    <input type="submit" name="submit" value="Увійти" class="login100-form-btn ">

				</div>

				<div class="text-center p-t-57 p-b-20">
					
				</div>

			

				<div class="text-center">
					<a href="reg.php" class="txt2 hov1">
						Зареєструватись
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->

<?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Ви увійшли на сайт, як гість <br> <a href='#'> Це посилання доступне тільки зареєстрованим користувачам</a>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "Ви увійшли на сайт, як ".$_SESSION [ 'login']." <br> <a'> Це посилання доступна тільки зареєстрованим користувачам</a>";
    }
    ?>
</body>
</html>
