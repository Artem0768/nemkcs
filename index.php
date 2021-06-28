<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/golovna_test.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="icon" type="image/png" href="logoCsGoicon.png">
  <title>
  golovna</title>
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
                <li><a href="news.php" class="menu__item">НОВИНИ</a></li>
                <li><a href="tyr.php" class="menu__item">ТУРНІРИ</a></li>
                <li><a href="personal office.php" class="menu__item">ОСОБСТИЙ КАБІНЕТ</a></li>
                 <? if ($_SESSION['login'] == ''):?>
                    <li><a href="" class="menu__item">ВХІД / РЕЄСТРАЦІЯ</a></li>
                     <? else: ?> <li><a href="" class="menu__item">ВИЙТИ</a></li>
                 <? endif; ?>
            </ul>
        </nav>
    </div>

        <div class="header_wrapper">
                    <div class="header_logo">
                        <a href="index.php" class="header_logo_link">
                            <img src="img/SVG/LOGO.svg" alt="logo">
                        </a>
                    </div>
                   
                            <div class="list__bottom"> 
                     <nav class="header_nav__bottom">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="news.php" class="header_link">НОВИНИ</a>
                        </li>
                        <li class="header_item">
                            <a href="comand.php" class="header_link">КОМАНДИ</a>
                        </li>
                        <li class="header_item">
                            <a href="personal office.php" class="header_link">ОСОБИСТИЙ КАБІНЕТ</a>
                        </li>
                        <? if (!isset($_SESSION['login'])):?>
                    <li>
                        <a href="open" class="header_item">ВХІД / РЕЄСТРАЦІЯ</a></li>
                     <? else: ?> <li><a href="open/logout.php" class="header_item">ВИЙТИ</a></li>
                 <? endif; ?>
                    </ul>
                </nav>
                </div>     
            </div>
     
           
            
              <div class="intro_header">
        <div class="registration_header">
    <div class="intro_logo">
      <img src="img/SVG/LOGO.svg" alt="logo" class="intro_logo_img">
    </div>
    <div class="cs_go">
        <p class="nemk">NEMK</p>
      <p class="p_cs_go">CS:GO</p>
    </div><? if (!isset($_SESSION['login'])):?>
                       <button class="btn_button" type="button">Реєстрація</button>
                     <? else: ?>    
                        <a href="comand.php">
                        <button class="btn_button" type="button">Пошук команди</button></a>
                 <? endif; ?>
      
            </div>
            </div>      
                    
                </div>  
           
<section>
                <!-- Header end -->
 <main class="main">
        <section class="section_news">
         
           <div class="news_rating_container">
      
                <div class="news">  
                    <div class="tabs">
        
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="ОБЗОР">НОВИНИ</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="ПРАВИЛА ТУРНІРУ">ПРЯМА ТРАНСЛЯЦІЯ</label>
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" title="HTML5">ТУРНІРИ </label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4" title="УЧАСНИКИ">РОЗПОРЯДОК МАТЧІВ</label>
            
           
            <section class="mt-4" id="content-tab1">
                  <div class="title_about_us_two">
                                <div class="hr_about_us">
                                    <hr class="hr_news_tur">
                                </div>
                                <div class="item_about_us">
                                    <p class="title_news">Новини</p>
                                </div>
                                
                            </div>
            <?php
                $query = $connection -> query("SELECT * FROM `articles` ORDER BY `datetime` DESC");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На даний момент немає постів.</span>
                <?php
                    endif;
                    while ($res = mysqli_fetch_assoc($query)):
                ?>
               
                   <div class="news_on">
                     <div class="news_img">
                    <img src="<?=$res['image'];?>" class="news_golovna">
                </div>
                              <div class="text_news">
                    <div class="title_tyr">
                    <h1 class="title_tyr_text"><?=$res['title'];?></h1>
                    </div>
                    <div class="inf_title">
                    <p class="news_kontent"><?=$res['intro'];?></p>
                    </div>
                    <div class="news_button">
                        <div class="_baton">
                    <a href="article.php?id=<?=$res['id'];?>" class="btn btn-outline-primary mt-3">
                        <a href="news.php">
                        <button  type="button" class="button_read_more">
                                <p class="read_more">Читати далі</p>
                            </button></a></a>
                    </div>
                    </div>
                    </div>
                </div>
          
            <?php
                endwhile;
            ?>
        </section>
            <section id="content-tab2">
                <div class="title_about_us_two">
                                <div class="hr_about_us">
                                    <hr class="hr_news_tur">
                                </div>
                                <div class="item_about_us">
                                    <p class="title_news">Пряма трансляція</p>
                                </div>
                                
                            </div>
                <div class="stream">
                    <p class="stream_title">Турнір коледжу</p>
                <iframe width="90%" height="400px" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </section>
            <section id="content-tab3">
                <div class="title_about_us_two">
                                <div class="hr_about_us">
                                    <hr class="hr_news_tur">
                                </div>
                                <div class="item_about_us">
                                    <p class="title_news">Турніри</p>
                                </div>
                                
                            </div>
                 <div class="tournaments">
                <?php
                $query = $connection -> query("SELECT * FROM `turnirs`");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На даний момент немає турнірів.</span>
                <?php
                    endif;
                    while ($res = mysqli_fetch_assoc($query)):
                ?>
               <div class="tournaments__block">
                
                <div class="photo-1">
                    <p class="photo__p">5 X 5</p>  
                    <img src="img/wp6505441 1.svg" class="img_tur">
                </div>
                <a href="turnir_info.php?id=<?=$res['id'];?>">
                <div class="tournaments__text"> 
                    <div class="tournaments__text__rows1"> 
                        <div class="tournaments__text__rows1__icon1">
                            <div class="icon">
                                <img src="img/icons/icons8-counter-strike-64 4.png" >
                            </div>
                            <div class="tournaments__content">
                                <? if($res['status'] == 1): ?>
                                <p class="registration">Реєстрація вікдрита</p></div>
                            <? endif; ?>
                            <? if($res['status'] == 0): ?>
                                <p class="registration">Реєстрація закрита</p></div>
                            <? endif; ?>
                        
                        </div>
                        <div class="tournaments__text__rows1__icon2">
                            <div class="icon">
                                <img src="img/icons/icons8-трофей-64 1.png " >
                            </div>
                            <div class="tournaments__content2"> 
                                <p class="prize"><?=$res['prize'];?></p>
                            </div></div>
                    </div>
                    <div class="tournaments__text__rows2">
                                <p class="title_name_tur"><?=$res['name'];?></p>
                    </div>
                    <div class="tournaments__text__rows3">
                       
                        <div class="tournaments__text__rows3__icon1">
                            <p class="data_title"><?=$res['date_start'];?></p>
                        </div>
                        </div>
                        </div>
            </a>
                
                                </div> 

                <?php
                endwhile;
            ?>
      
            
             
                                
            </section>
            <section id="content-tab4">
                <div class="title_about_us_two">
                                <div class="hr_about_us">
                                    <hr class="hr_news_tur">
                                </div>
                                <div class="item_about_us">
                                    <p class="title_news">Розпорядок матчів</p>
                                </div>
                                
                            </div>
                  <div class="content__block">
            <div class="type__match">Фінал, Best of 1
                
                        </div>  
            <div class="rows__two">
                <div class="content__center">
                        <div class="comand">TeXnaRi
                        

                        </div>
                    <div class="icons"><img src="img/icons/placeit.png">    
                    </div>  
                    <div class="score">
                        
                    </div>
                    <div class="score"></div>
                    <div class="icons"><img src="img/icons/placeit.png">
                                                        </div>
                    <div class="comand">Team Remake</div>
                                                            </div>
                    <div class="status">очікується</div>        
            </div>                                  
                
                <div class="date__match">
                    15.03.19:40
                    
                            </div>      
            
                                                                        </div>
                    <div class="content__block">
            <div class="type__match">Фінал, Best of 1
                
                        </div>  
            <div class="rows__two">
                <div class="content__center">
                        <div class="comand">TeXnaRi
                        

                        </div>
                    <div class="icons"><img src="img/icons/placeit.png">    
                    </div>  
                    <div class="score">
                        
                    </div>
                    <div class="score"></div>
                    <div class="icons"><img src="img/icons/placeit.png">
                                                        </div>
                    <div class="comand">Team Remake</div>
                                                            </div>
                    <div class="status">очікується</div>        
            </div>                                  
                
                <div class="date__match">
                    15.03.19:40
                    
                            </div>      
            
                                                                        </div>
                 <div class="content__block">
            <div class="type__match">Фінал, Best of 1
                
                        </div>  
            <div class="rows__two">
                <div class="content__center">
                        <div class="comand">TeXnaRi
                        

                        </div>
                    <div class="icons"><img src="img/icons/placeit.png">    
                    </div>  
                    <div class="score">
                        
                    </div>
                    <div class="score"></div>
                    <div class="icons"><img src="img/icons/placeit.png">
                                                        </div>
                    <div class="comand">Team Remake</div>
                                                            </div>
                    <div class="status">очікується</div>        
            </div>                                  
                
                <div class="date__match">
                    15.03.19:40
                    
                            </div>      
            
                                                                        </div>
                    <div class="content__block">
            <div class="type__match">Фінал, Best of 1
                
                        </div>  
            <div class="rows__two">
                <div class="content__center">
                        <div class="comand">TeXnaRi
                        

                        </div>
                    <div class="icons"><img src="img/icons/placeit.png">    
                    </div>  
                    <div class="score">
                        
                    </div>
                    <div class="score"></div>
                    <div class="icons"><img src="img/icons/placeit.png">
                                                        </div>
                    <div class="comand">Team Remake</div>
                                                            </div>
                    <div class="status">очікується</div>        
            </div>                                  
                
                <div class="date__match">
                    15.03.19:40
                    
                            </div>      
            
                                                                        </div>

            </section>

                </div> 
            </div>
                       


                                    <!-- RATING 1-->
                        <div class="rating_one">
                <div class="rating">
                    <div class="team_rating_item">
                        <div class="title_rating_team">
                        <p class="title_rating_team_one">РЕЙТИНГ ГРАВЦІВ</p>
                        </div>
                        <div class="icon_rating">
                            <img src="img/icons8-counter-strike-64 2.png" alt="">
                        </div>
                    </div>

                       <?php
                     
                $query = $connection -> query("SELECT * FROM `user` LIMIT 5");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На даний момент немає гравців.</span>
                <?php
                    endif;
                    while ($res = mysqli_fetch_assoc($query)):
                ?>

      
                 <div class="rating_information">
                        <div class="photo_team_item">
                            
                            <div class="number_one">
                                <p class="item_one"><?=$res['id'];?></p>
                            </div>
                            <div class="item_team">
                            <div class="photo_team">
                                <img src="img/SVG/Placeit - Battle Royale Logo Maker Featuring a PUBG Inspired Character 2.svg" alt="">
                            </div>
                            <div class="team_name_item">           
                                <p class="team_name"><?=$res['name'];?></p>
                            </div>
                            <div class="rating_figure">
                                <p class="number_of_ratings">1000</p>
                            </div>
                            </div>                      
                        </div>

                         <div class="item_hr_rating">
                             <hr class="hr_rating">
                         </div>
                    </div>
 

                <?php
                endwhile;
            ?>

                    
                 
                   
                    
                
                         <div class="whole_rating_item_two">
                            <a href="user.php" class="point">
                                <div class="point_title">
                             <p  class="whole_rating_title">ВЕСЬ РЕЙТИНГ</p>
                            
                             <p class="three_dots">...</p>
                             </div>
                            
                            </a>
                         </div>
                    </div>


                                         <!-- RATING 2-->
                        <div class="colum">
                    <div class="team_rating_item_one">
                        <div class="title_rating_team">
                        <p class="title_rating_team_one">РЕЙТИНГ КОМАНД</p>
                        </div>
                        <div class="icon_rating">
                            <img src="img/icons8-counter-strike-64 2.png" alt="">
                        </div>
                    </div>
                    <div class="rating_colum">
                 
                   <?php
                     
                $query = $connection -> query("SELECT * FROM `teams` LIMIT 5");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На даний момент немає команд.</span>
                <?php
                    endif;
                    while ($res = mysqli_fetch_assoc($query)):
                ?>

      
                 <div class="rating_information">
                        
                        <div class="photo_team_item">
                            <div class="number_one">
                                <p class="item_one"><?=$res['id'];?></p>
                            </div>
                            <div class="item_team">
                            <div class="photo_team">
                                <img src="img/SVG/Placeit - Battle Royale Logo Maker Featuring a PUBG Inspired Character 2.svg" alt="">
                            </div>
                            <div class="team_name_item">
                                <p class="team_name"><?=$res['name'];?></p>
                            </div>
                            <div class="rating_figure">
                                <p class="number_of_ratings" >1000</p>
                            </div>
                            </div>   
                        </div>
                        
                         <div class="item_hr_rating">
                             <hr class="hr_rating">
                         </div>
                         
                    </div>
 

                <?php
                endwhile;
            ?>
                    
                    <div class="whole_rating_item">
                            <a href="comand.php" class="point">
                                <div class="point_title">
                             <p  class="whole_rating_title">ВЕСЬ РЕЙТИНГ</p>
                            
                             <p class="three_dots">...</p>
                             </div>
                            
                            </a>
                         </div>
                    </div>
                </div>
</div>
        </div>

        </section>
          <!-- news  END-->
                                

                            <!-- footer-->
 </main>
    <footer class="footer">
        <section class="social">
            <div class="social_title">
              <p class="social_item">Дізнавайтеся найактуальніші новини про турніри першими!</p>
            </div>

            <div class="inst_disc">
              <div class="inst_disc_item">
                <img src="img/icons/instagram_f_icon-icons 1.png" class="instagram_img_footer">
                <p class="title_inst_disc">INSTAGRAM</p>
              </div>
              <div class="inst_disc_item">
                <img src="img/icons/discord_logo_icon_145337 1.png" alt="" class="discord_img_footer">
                <p class="title_inst_disc">DISCORD</p>
              </div>   
            </div>
        </section>  
        <div class="none_footer">
            <div class="social_footer">
                <img src="img/icons/icons8-instagram-gradient.png" class="instagram_gradient">
                <p class="title_soc">ЧИТАЙТЕ НОВИНИ В INSTAGRAM</p>
                <img src="img/icons/icons8-discord-gradient.png" class="discord_gradient">
                <p class="title_soc">ПРИЄДНУЙТЕСЬ ДО НАС В DISCORD</p>
            </div>
            <hr class="hr_footer_one">
            
            
            <div class="footer_functions">
                <nav class="footer__nav_one">
                    <ul class="footer__list">
                        <li class="title_footer">
                            <a href="#!" class="footer__link">ПЕРЕГЛЯНУТИ</a>
                        </li>
                        <li class="title_footer">
                            <a href="tyr.php" class="footer__link">ТУРНІРИ</a>
                        </li>
                            
                    </ul>
                </nav>
                 <div class="footer__nav_two">
                <nav >
                    <ul class="footer__list">
                        <li class="title_footer">
                            <a href="comand.php" class="footer__link">КОМАНДИ</a>
                        </li>
                        <li class="title_footer">
                            <a href="news.php" class="footer__link">НОВИНИ</a>
                        </li> 
                           
                    </ul>
                </nav>
             </div>
            </div>
            <hr class="hr_footer_one">
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
 
