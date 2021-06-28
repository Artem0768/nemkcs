<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <script src="jquery/jquery.js"></script>
	<link rel="stylesheet" href="css/news_golovna.css">
	<link rel="stylesheet" href="css/reset.css">
	<title>Document</title>
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
	<main class="main">

				<div class="news_header">
			<div class="header_img">
				<img src="img/NEWS_GOLOVNA.png" alt="" class="img_news">
			</div>
			<div class="news_csgo">
				<div class="title_news">
					<p class="tournaments">Кіберспорт у коледжі.</p>
					<p class="information">Ніколи не сприймалb всерйоз людей, які грають у коп`ютерні ігри. Завжди рахувала їх «задротами», «занудами», і просто нецікавими людьми. Та сьогодні мої стереотипи розвіялись, після спілкування з двома студентами мого «Нововолинського електромеханічного коледжу».
					</p>
					<a href="news_title.php">
					<button class="btn_button">Читати далі</button>
					</a>
				</div>
			</div>
		</div>
		<section class="section">
			<div class="info_news">
				<div class="one_news">
					<img src="img/NEWS_GOLOVNA.png" class="img_new">
					<p class="schedule">Шлях до мрії молодого кіберспортсмена</p>
					<a href="#">
					<button class="btn_button_news" type="button">
								Читати далі</button></a>
				</div>
				<div class="one_news">
					<img src="img/how.png" class="img_new">
					<p class="schedule">
Усе, що потрібно знати про кіберспорт</p>
					<a href="#">
					<button class="btn_button_news" type="button">
								Читати далі</button></a>
				</div>
				<div class="one_news">
					<img src="img/kiber.jpg" class="img_new">
					<p class="schedule">Як стати кіберспортсменом і як туди потрапити </p>
					<a href="#">
					<button class="btn_button_news" type="button">
								Читати далі</button></a>
				</div>

			</div>
			<div class="info_news">

				<div class="one_news">
					<img src="img/mone.jpg" class="img_new">
					<p class="schedule">Скільки заробляє кіберспортсмен</p>
					<a href="#">
					<button class="btn_button_news" type="button">
								Читати далі</button></a>
				</div>
				<div class="one_news">
					<img src="img/nawi.jpg" class="img_new">
					<p class="schedule">Кращі команди України в CS: GO</p>
					<a href="#">
					<button class="btn_button_news" type="button">
								Читати далі</button></a>
				</div>
				<div class="one_news">
					<img src="img/simpl.jpg" class="img_new">
					<p class="schedule">Наша гордість країни по CS GO</p>
					<a href="#">
					<button class="btn_button_news" type="button">
								Читати далі</button></a>
				</div>

			</div>
			<div class="three_news">
				
			</div>
		</section>


		<div class="transition">
			<button class="button"><</button>
			<button class="button">1</button>
			<button class="button">2</button>
			<button class="button">3</button>
			<button class="button">4</button>
			<button class="button">></button>
		</div>







	</main>
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