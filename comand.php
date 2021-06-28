  
  <?php
session_start(); ?>
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery/jquery.js"></script>
  
<link rel="stylesheet" type="text/css" href="css/pravul.css">
	<title>Document</title>
</head>
<body>
    <?php include_once("connection.php")
    ?>    
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
            </div>
    
            
            
            
                    
                    
                </div> 
	 <section id="content-tab4">
               <div class="container">
                    <div class="hr__button">
                        <div class="hr__tournaments">
                        <hr class="hr__test">
                        <p class="tournaments_">Команди</p>
                        </div> 
                                <a href="form_team.php">
                                 <button class="btn_button" type="button">Створити команду</button>
                                </a>

                          
                    </div>  
                
            
            <div class="rows">
                <div class="rows__gray">
                    <div class="rows__text"><p>№</p></div>
                    <div class="rows__text__name"><p>Ім'я</p></div>
                    
                    <div class="rows__text__right"><p>Рейтинг</p></div></div>
                    <?php
                $query = $connection -> query("SELECT * FROM `teams`");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На даний момент немає команд.</span>
                <?php
                    endif;
                    while ($res = mysqli_fetch_assoc($query)):
                ?>

                <? if($res['id'] %2 != 0): ?>
                <div class="rows__black"><a href="command_description.php?id=<?=$res['id'];?>">
                    <div class="rows__text"><?=$res['id'];?></div>
                     <div class="rows__text__name"><p class="name__player"><?=$res['name'];?></p></div>
                     <div class="rows__text__right"><p>1000</p></div>
                </div></a>
                    <? endif; ?>
                    <? if($res['id'] %2 == 0): ?>
                <div class="rows__gray"><a href="command_description.php?id=<?=$res['id'];?>">
                    <div class="rows__text"><?=$res['id'];?></div>
                     <div class="rows__text__name"><p class="name__player"><?=$res['name'];?></p></div>
                     <div class="rows__text__right"><p>1000</p></div>
                </div></a>
                    <? endif; ?>

                <?php
                endwhile;
            ?>
        </div>  
</div>
            </section>
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