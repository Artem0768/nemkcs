<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/personal_office.css">
	<link rel="stylesheet" href="css/reset.css">
	<script src="jquery/jquery.js"></script>
	<title>personal office</title>
</head>
<body>
	<?php include_once("connection.php")
    ?> 
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
                <li><a href="golovna test.php" class="menu__item">ГОЛОВНА</a></li>
                <li><a href="tyr.php" class="menu__item">ТУРНІРИ</a></li>
                <li><a href="news.php" class="menu__item">НОВИНИ</a></li>
                <li><a href="" class="menu__item">МАТЧІ</a></li>
                <li><a href="" class="menu__item">РЕДАГУВАТИ ПРОФІЛЬ</a></li>
               	
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
            </div>
   	 
  				</div>	
  		</div>





















  		
				





			<?php
            $id = $_SESSION['id'];
            $query = $connection -> query("SELECT * FROM `user` WHERE `id` = '$id'");
          
            while ($res = mysqli_fetch_assoc($query)):
        ?>
  		
        		<div class="logo_team">
				<div class="logo">
					<img src="img/person/Ellipse 1.png" alt="" class="elips_s">
				</div>
				<div class="name_team">
					<div class="flag">
						<img src="img/person/Ukraine Flag and Emblem - Company Logo Downloads 1.png" class="flag_adaptiv">
					</div>


				</div>
				<div class="full_name">
					<p class="item_name_one"><?=$res['name'];?></p>
				</div>
			</div>
  		


			<?php
                endwhile;
            ?>






				<div class="link_intro">
				<div class="team_statistics">
					<div class="rating">
						<div class="elo_item">
							<p class="title_statistics">ELO РЕЙТИНГ</p>
						</div>
						<div class="title_elo">
							<p class="item_number">1338</p>
						</div>
					</div>
					<div class="rating">
						<div class="title_victory">
							<p class="title_statistics">ПЕРЕМОГ</p>
						</div>
						<div class="title_number">
							<p class="item_number">49</p>
						</div>
					</div>
					<div class="rating">
						<div class="title_data">
							<p class="title_statistics">ДАТА СТВОРЕННЯ</p>
						</div>
						<div class="title_created">
							<p class="item_number">28.08.20</p>
						</div>
					</div>
				</div>
				<div class="title_edit">
					<div class="services">
						<img src="img/person/Services.png" alt="services" class="nasroik">
					</div>
					<div class="item_edit">
						<p>Редагувати</p>
					</div>
			</div>
			</div>
	</header>

	<main class="main">
<!--------------------------------------------- ело рейтинг команди-->
		

<!------------------------------------- інформація про команду-->
		<section>
			<div class="a">
				
			<div class="team_composition">

				<div class="title_team_composition">
					<div class="title_about_us_two">
								<div class="hr_about_us">
									<hr>
								</div>
								<div class="item_about_us">
									<p class="about_us">Команда</p>
								</div>
								
							</div>
					<div class="aa">
						<a href="command_description.php">
					<div class="title_team_rating">
						<div class="player_team">
					<div class="img_logo_team">
						<img src="img/person/Placeit - Battle Royale Logo Maker Featuring a PUBG Inspired Character 3.png" alt="">
					</div>
					<div class="texnari_teg">
						<div class="name_team_tex">
							<p class="p_tex">TeXnaRi</p>
						</div>
						<div class="teg">
							<p class="p_teg">Tex</p>
						</div>
					</div>
					<div class="rating_elo"> 
						<div class="rating_wan">
							<p class="item_rating">РЕЙТИНГ</p>
						</div>
						<div class="elo">
							<p class="p_elo">976</p>
						</div>
					</div>
				</div>
						
							</div></a>
							<div class="pro_team">
							<div class="title_about_us_one">
								<div class="hr_about_us">
									<hr>
								</div>
								<div class="item_about_us">
									<p class="about_us">Про нас</p>
								</div>
								
							</div>
								<div class="steam">
				<div class="img_steam">
					<img src="img/person/steam_93621 1.png" alt="">
				</div>
				<div class="team_steam">
					<p>TeXnaRI</p>
				</div>
			</div>
								</div>
					</div>
					</div>
<!--турніри////////////////////////////////////////////////  -->
				<div class="team_matches">
					<div class="title_about_us">
								<div class="hr_about_us">
									<hr>
								</div>
								<div class="item_about_us">
									<p class="about_us">Турніри команди - 14</p>
								</div>
								
							</div>	
			<div class="tournaments">
	  
	    	<div class="tournaments__block">
	    		<div class="photo-1"><p class="photo__p">1 X 1</p>	<img src="img/wp6505441 1.svg"></div>
	    		<div class="tournaments__text"> 
	    			
	    			<div class="tournaments__text__rows1"> 
	    				<div class="tournaments__text__rows1__icon1">
	    					<div class="icon"><img src="img/icons/icons8-counter-strike-64 4.png" ></div>
	    					<div class="tournaments__content">Турнір закінчений</div>
	    				
	    			    </div>
	    				<div class="tournaments__text__rows1__icon2">
	    					<div class="icon"><img src="img/icons/icons8-трофей-64 1.png " ></div>
	    					<div class="tournaments__content2"> 100 грн</div></div>
	    			</div>
	    			<div class="tournaments__text__rows2">CS:GO 1x1</div>

	    			<div class="tournaments__text__rows3">

	    				<div class="tournaments__text__rows3__icon1"> 1 VS 1 | 23/32</div>
	    				
	    				</div>
						</div>
			
				


	    						</div>	
	    						<div class="tournaments__block">
	    		<div class="photo-1"><p class="photo__p">2 X 2</p>	<img src="img/wp6505441 1.svg"></div>
	    		<div class="tournaments__text"> 
	    			
	    			<div class="tournaments__text__rows1"> 
	    				<div class="tournaments__text__rows1__icon1">
	    					<div class="icon"><img src="img/icons/icons8-counter-strike-64 4.png" ></div>
	    					<div class="tournaments__content">Турнір закінчений</div>
	    				
	    			    </div>
	    				<div class="tournaments__text__rows1__icon2">
	    					<div class="icon"><img src="img/"></div>
	    					<div class="tournaments__content2"> 100 грн</div></div>
	    			</div>
	    			<div class="tournaments__text__rows2">CS:GO 2x2</div>

	    			<div class="tournaments__text__rows3">

	    				<div class="tournaments__text__rows3__icon1"> 2 VS 2 | 23/32</div>
	    					    				</div>
						</div>
			
				


	    						</div>	
	    						<div class="tournaments__block">
	    		<div class="photo-1"><p class="photo__p">5 X 5</p>	<img src="img/wp6505441 1.svg"></div>
	    		<div class="tournaments__text"> 
	    			
	    			<div class="tournaments__text__rows1"> 
	    				<div class="tournaments__text__rows1__icon1">
	    					<div class="icon"><img src="img/icons/icons8-counter-strike-64 4.png" ></div>
	    					<div class="tournaments__content">Турнір закінчений</div>
	    				
	    			    </div>
	    				<div class="tournaments__text__rows1__icon2">
	    					<div class="icon"><img src="img/icons/icons8-трофей-64 1.png " ></div>
	    					<div class="tournaments__content2"> 100 грн</div></div>
	    			</div>
	    			<div class="tournaments__text__rows2">CS:GO 5x5</div>

	    			<div class="tournaments__text__rows3">

	    				<div class="tournaments__text__rows3__icon1"> 1 VS 1 | 23/32</div>
	    				
	    				</div>
						</div>
			
				


	    						</div>
	    						<div>
			<div class="btn_apply_two">
								<button class="btn_button" type="button">
								ПОДАТИ ЗАЯВКУ</button>
							</div>
		</div>	
		</div>
		</div>
		
			</div>
		</section>
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
































