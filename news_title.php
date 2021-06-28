<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <script src="jquery/jquery.js"></script>
	<link rel="stylesheet" href="css/news_golovna.css">
	<link rel="stylesheet" href="css/reset.css">
</head>
<body>
	<header class="header">
		<div class="wrapper">
   	<div class="content">
   		<div class="background">
   <div class=" header__container"> 
        <div class="menu-burger__header"> 
            <span></span>
        </div>

        <nav class="header__nav"> 
            <ul class="menu header__menu">
                <li><a href="index.php" class="menu__item">ГОЛОВНА</a></li>
                <li><a href="tyr.php" class="menu__item">ТУРНІРИ</a></li>
                <li><a href="news.php" class="menu__item">НОВИНИ</a></li>
                <li><a href="" class="menu__item">МАТЧІ</a></li>
            </ul>
        </nav>
    </div>
   		<div class="header_wrapper"> 
                    <div class="header_logo">
                       <a href="index.php" class="header_logo_link">
                            <img src="img/SVG/LOGO.svg">
                        </a>
                    </div>
                   
							<div class="list__bottom"> 
                     <nav class="header_nav__bottom">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="index.php" class="header_link">ГОЛОВНА</a>
                        </li>
                        <li class="header_item">
                            <a href="tyr.php" class="header_link">ТУРНІРИ</a>
                        </li>
                        <li class="header_item">
                            <a href="news.php" class="header_link">НОВИНИ</a>
                        </li>
                        <li class="header_item">
                            <a href="#!" class="header_link">МАТЧІ </a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div class="personal_office">
                    <a href="personal office.php">
                   <img src="img/command/Ellipse 6.svg" alt="">
                    </a>
                </div>
	</header>
	<div class="news_title_header">
		<img src="img/NEWS_GOLOVNA.png" alt="" class="news_title_img">
		<p class="tournaments">Кіберспорт у коледжі.</p>
					<p class="information">Ніколи не сприймала всерйоз людей, які грають у коп`ютерні ігри. Завжди рахувала їх «задротами», «занудами», і просто нецікавими людьми. Та сьогодні мої стереотипи розвіялись, після спілкування з двома студентами мого «Нововолинського електромеханічного коледжу».</p>

<p>Знайомтесь – це Максим Гіль та Влад Мацюк, студенти групи 1-КТ-16. Дуже позитивні, активні та спортивні хлопці, які ніколи не займались професійно кіберспортом, але сьогодні взяли головний приз на турнірі  по КС 1.6 у місті Володимирі – Волинському.</p>
<p>
«Про турнір ми дізнались  випадково в інстаграмі, десь там були пости… Представляли свою команду «Crazy Skorpions» ідея назви Влада. Годину одна гра, годину друга. Дві гри зіграли, дві карти виграли, не було серйозних противників»  – говорить Максим.</p>
<p><br>
Турнір проходив у клубі Біос, між собою змагались 6 команд. Техніку забезпечили, єдине –  кожен мав мати свій девайс (мишки, клавіатури, навушники).</p>
<p>
«На гру налаштовані ми не були, пішли по-приколу, щоб побачити що це таке, і спробувати свої сили. Згадати молодість. – посміхається Максим – Зараз кіберспрот набуває неабиякої популярності, і в майбутньому може стати стабільною роботою з дуже високою заробітною платою».</p>
<p><br>
А зараз наші учасники радіють кубку, який прикрашає поличку в гуртожитку, та чекають наступного турніру. Тож я бажаю успіхів нашим хлопцям!
					</p>
	</div>
	






	<footer class="footer">
		<div class="title_footer">
			
		</div>
	</footer>
<script>$(document).ready(function() {
    $('.menu-burger__header').click(function(){
        $('.menu-burger__header').toggleClass('open-menu');
        $('.header__nav').toggleClass('open-menu');
         $('.background').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
    });
});</script>
</body>
</html>