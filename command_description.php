<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/command_description.css">
	<link rel="stylesheet" href="css/reset.css">
	<script src="jquery/jquery.js"></script>
	<title>command description</title>
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
                    <a href="personal office.html">
                    <img src="img/command/Ellipse 6.svg" alt="">
                    </a>
                </div>
            </div>
   	 
  				</div>	
  		</div>

  		<?php
            $id = $_GET['id'];
            $query = $connection -> query("SELECT * FROM `teams` WHERE `id` = '$id'");
          
            while ($res = mysqli_fetch_assoc($query)):
        ?>
  		<div class="link_intro">
				<div class="img_team">
					<div class="logo_team">
						<img src="img/command/logo team.svg" alt="logo" class="img_team_title">
					</div>
					<div class="team_name">
						<div  class="title_name">
							<p class="item_name">КОМАНДА</p>
						</div>
						<div class="icons_team_name">
							<div class="img_icons">
								<img src="img/command/icons8-counter-strike-64 5.svg" alt="" class="icons_cs">
							</div>
							<div class="team">
								<p class="te" id="idd" name="idd"><?=$res['id'];?></p>
								<p class="te"><?=$res['name'];?></p>
							</div>
						</div>
						
					</div>
				</div>

				<div class="team_statistics">
					<div class="rating">
						<div class="elo_item">
							<p class="title_statistics">ELO РЕЙТИНГ</p>
						</div>
						<div class="title_elo">
							<p class="item_number">1000</p>
						</div>
					</div>
					<div class="rating">
						<div class="title_victory">
							<p class="title_statistics">ПЕРЕМОГ</p>
						</div>
						<div class="title_number">
							<p class="item_number">0</p>
						</div>
					</div>
					 <div class="rating">
						<div class="title_data">
							<p class="title_statistics">ДАТА СТВОРЕННЯ</p>
						</div>
						<div class="title_created">
							<p class="item_number">27.06.21</p>
						</div>
					</div> 
				</div>
			</div>
			<?php
                endwhile;
            ?>
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
									<p class="about_us">Склад команди</p>
								</div>
								
							</div>
					<div class="aa">

			

            <?php
							$id = $_GET['id'];
                $query = $connection -> query("SELECT * FROM `user` WHERE id_team = $id");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На даний момент немає гравців.</span>
                <?php
                    endif;
                    while ($res = mysqli_fetch_assoc($query)):
                ?>

      
                 <div class="title_team_rating">
						<div class="img_team_logo">
							<a href="personal office.php">
							<img src="img/command/komands.svg" alt="logo team">
						</div>

						<div class="clan_teg_title">
							<div class="team_name_leader">
								<div class="team_tex">
									<p class="item_texn"><?=$res['name'];?></p>
								</div>
								<div class="img_crown">
								<img src="img/command/Crown_40997 1.svg" alt="crown" class="krown">
							</div>
							</div>
							<div class="title_teg">
								<div class="teg">
								<p class="title_tex">Tex</p>
							</div>
							</div>
						</div>
							<div class="rating_title">
							 <div class="rating_player">
							 	<p class="item_number_one">1000</p>
							 </div>
								<div class="player_rating">
								<p class="item_rating">РЕЙТИНГ</p>
							</div>	
						</a>
							</div>
						</div>
 

                <?php
                endwhile;
            ?>

					

						</div>
						<div class="btn_apply">
							<form >            
								<button class="btn btn-outline-primary mt-3" type="button" id="addBtn">Приєднатись</button>
							</form>
						</div>
							</div>
							<div class="pro_team">
							<div class="title_about_us_one">
								<div class="hr_about_us">
									<hr>
								</div>
								<div class="item_about_us">
									<p class="about_us">Про нас</p>
								</div>
								
							</div>
								<div class="command_description">
									<p class="description">Опису ще немає :(</p>
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
									<p class="about_us">Турніри команди - 3</p>
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
	    					<div class="icon"><img src="img/icons/icons8-трофей-64 1.png " ></div>
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
								ВСІ ТУРНІРИ</button>
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#addBtn").click(function () {
            const idd = <?=$_GET['id'];?>
           

            $.ajax({
                url: './code/join_team.php',
                type: 'POST',
                cache: false,
                data: {idd},
                dataType: 'html',
                success: function (data) {
                    if (data == 'ready') {
                        $('#errorSpan').hide()
                        location.href = '/comand.php'
                    } else {
                        $('#errorSpan').show()
                        $('#errorSpan').text(data)
                    }
                }
            })
        })
    </script>

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
































