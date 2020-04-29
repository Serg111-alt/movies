<!DOCTYPE html>
<html lang="en">

  <head>
<style>
#massage{
    font-size:35px;
    color:black;
}
.container-1{
    
 
}

#form{
    font-size:25px;
    color:white;
   margin-left:200px;
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/movie.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="other.css">
    <title>Movies</title>








    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
   
    
    
 
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        
                        <a href="index.php" class="logo">
                            .Track Cinema
                        </a>
                        <?php
ob_start(); 
include_once "action.php"; 
if (isset($_POST['go'])) {
    $login = $_POST['login'];
    $password = $_POST['pass'];
    if (check_autorize($login,$password)) {
        echo "<p  style = margin-left:435px;color:white;font-size:25px; >Приветствуем, $login</p>";
        if (check_admin($login, $password)) {
            echo "<a href='hello.php?login=$login' id = 'form' style = background:black;>Просмотр статистики</a>";
            ob_end_flush();
        }
    } else {
        echo "<p style = \"margin-left:380px;padding:5px;color:white;font-size:25px;\">Вы не зарегистрированы!</p>";
    }
}
 ?>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Главная</a></li>
                            <li class="scroll-to-section"><a href="#about">Вход</a></li>
                            <li class="scroll-to-section"><a href="#projects">Жанры</a></li>
                            <li class="scroll-to-section"><a href="#tickets">Билеты</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                       
                    </nav>
                </div>
            </div>
        </div>
    </header>
  
    
  
 
    
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          

          
                
                 

                    <div class="item">
            <div class="img-fill">
                <img src="images/western.jpg" alt="">
                <div class="text-content">

                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="images/alone-ranger2.jpg" alt="">
                <div class="text-content">
   
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="images/raketa.jpg" alt="">
                <div class="text-content">
                </div>
          <!-- // Item -->
          <!-- Item -->
          
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
 
    <div class="scroll-down scroll-to-section"><a href="#about">Log in</a></div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        
                <div class="block2">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        
                            
                                  
                <?php
// echo "<div style=\"font-size:50px;color:white;\">Вход</div>";

$str_form = "<span id='massage'></span>
            <div class='form-row' >
            
            <form   action ='index.php' id='signin' name='autoForm' class='ui-form'  method='post' onSubmit='return overify_login(this);' >
            
            <input type='text' disabled value='Статистика для админа' name='fname_dis' size='20'>
            <i class=\"fa fa-user\" aria-hidden=\"true\"></i> <input type='text' name='login' placeholder = 'login'>
            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> <input   type='password' name='pass' placeholder = 'password'>
 			 <input type='submit' name='go' value='Подтвердить' class = 'button'>
              </form></div>";
              echo $str_form;
              include "header.php";
?>
</div>
                        </div>
                        
                           
                        
                    </div>
                </div>
               
                
            </div>
        </div>
    </section>

    <section class="section" id="projects">
      <div class="container">
     
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Жанры</h6>
                    <h6>(в прокате 6 фильмов)</h6>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">Все</li>
                        <li data-filter=".des">Боевик</li>
                        <li data-filter=".dev">Военный</li>
                        <li data-filter=".tsh">Вестерн</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid"> 
                         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                            <a href="images/reinjer.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="images/reinjer.jpg" alt=""></a> 
                          </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="images/JohnWick2.jpg"  data-lightbox="image-1" data-title="Our Projects"><img src="images/JohnWick2.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                            <a href="images/1917.jpg  " data-lightbox="image-1" data-title="Our Projects"><img src="images/1917.jpg  " alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                         
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                            <a href="images/jango.jpg  " data-lightbox="image-1" data-title="Our Projects"><img src="images/jango.jpg" alt="jango"></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                            <a href="images/yarost.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="images/yarost.jpg" alt=""></a>
                          </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="images/medmaks.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="images/medmaks.jpg" alt=""></a>
                            
                          </div>
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
   
        <div class="block" id = "tickets">
       
        <iframe src="content.php" width="1580" height="1650"></iframe>
        
    
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
        
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8948404.339110604!2d-76.37472994358791!3d39.25221039865885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe786917e1a22dddb!2sTrack%20Cinema!5e0!3m2!1sru!2sua!4v1588073430297!5m2!1sru!2sua" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
               
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Соцсети</p></li>
                                <h6 style = color:white;>Track Cinema(США)</h6>
                                <li><a rel="nofollow" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</div>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
        


    </script>

  </body>
</html>
