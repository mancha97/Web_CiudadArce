<?php 
session_start();
if(!isset($_SESSION['language'])){
  $_SESSION['language'] = 1;
}
?>

<!DOCTYPE html>
<html >

    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
            <meta name="description" content="">
            <meta name="author" content="">
        
            <title>CIUDAD ARCE</title>

        <?php 
          require 'head.php' ;
          ?>
      <link  id="set2" rel="stylesheet" type="text/css" href="public/css/set2.css" />
        
            <!-- Slideshow requerido -->
            <link id ="ss1" rel="stylesheet" href="public/slideshow/css/responsiveslides.css">
            <link id="ss2" rel="stylesheet" href="public/slideshow/css/slideshow.css">
            <script id="ss3" src="public/vendor/jquery/jquery.js"></script>
            <script id="ss4" src="public/slideshow/js/responsiveslides.min.js"></script>
            <script id="ss5" >
              $(function () {
                // Slideshow 
                $("#slider4").responsiveSlides({
                  auto: false,
                  pager: false,
                  nav: true,
                  speed: 500,
                  namespace: "callbacks",
                });
              });
            </script>
           
            <link id="welcome-css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        </head>
              <body style="background-color:black;" onload="checkCookie()" id="page-top">



                  <!--ESTO ES EL WELCOME-->
                  <div id="hideMe" style="z-index: 5; position: absolute; display:none;"><h1><p align=center>
                    <span>C</span> <span>i</span> <span>u</span> <span>d</span> <span>a</span> <span>d</span> 
                    <span> </span> <span>A</span> <span>r</span> <span>c</span> <span>e</span> <span>,</span> <br> <br> 
                    <span>L</span><span>a</span> <span> </span> <span>L</span> <span>i</span> <span>b</span> <span>e</span>
                    <span>r</span> <span>t</span> <span>a</span> <span>d</span> </p> </h1>
                  </div>
                  <!--FIN WELCOME-->
    <?php
      require 'nav.php';
    ?>

<div id="page-content-wrapper container-fluid" style="height:100%;"> 
            <div id="contentHolder" style=""> <!-- content -->
            <div id="wrapper">
                  <!-- Slideshow 4 -->
                  <div class="callbacks_container">
                    <ul class="rslides" id="slider4">
                      <li>
                        <img src="public/slideshow/images/arce.jpg" alt="">
                        <p class="caption"> </p>
                      </li>
                      <li>
                        <img src="public/slideshow/images/1.jpg" alt="">
                        <p class="caption">Las Ruinas de San Andrés</p>
                      </li>
                      <li>
                        <img src="public/slideshow/images/2.jpg" alt="">
                        <p class="caption">Iglesia Ciudad Arce</p>
                      </li>
                      <li>
                        <img src="public/slideshow/images/3.jpg" alt="">
                        <p class="caption">El alcalde de Ciudad Arce, José Alfredo Contreras, 
                        la Gobernadora Departamental Marta Lorena Araujo 
                        y diputados de la Asamblea Legislativa en actividad Fonavipo, Comunidad Pequeña Inglaterra.</p>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="grid row" id="btns">
                <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<div class="style_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                            <figure class="effect-julia">
                              <img src="public/img/1.jpg" alt="img21"/>
                              <figcaption>
                                <h4>Historia <span></span></h4>
                    
                                <a href="historia.php?#contentHolder">View more</a>
                              </figcaption>			
                            </figure>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<div class="style_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                    <figure class="effect-julia">
                      <img src="public/img/1.jpg" alt="img21"/>
                      <figcaption>
                        <h4>History <span></span></h4>
            
                        <a href="historia.php?#contentHolder">View more</a>
                      </figcaption>			
                    </figure>
                  </div>'; }?>
                     <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<div class="style_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                            <figure class="effect-julia">
                              <img src="public/img/2.jpg" alt="img21"/>
                              <figcaption>
                                <h4>Ubicación <span> Geográfica</span></h4>
                    
                                <a href="ubicacion.php?#contentHolder">View more</a>
                              </figcaption>			
                            </figure>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<div class="style_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                    <figure class="effect-julia">
                      <img src="public/img/2.jpg" alt="img21"/>
                      <figcaption>
                        <h4>Geographic <span>location</span></h4>
            
                        <a href="ubicacion.php?#contentHolder">View more</a>
                      </figcaption>			
                    </figure>
                  </div>'; }?>
                  
                  <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                            <figure class="effect-julia">
                              <img src="public/img/3.jpg" alt="img21"/>
                              <figcaption>
                                <h4>Alcalde <span>Municipal</span></h4>
                    
                                <a  id="navBtn" href="alcalde.php?#contentHolder">View more</a>
                              </figcaption>			
                            </figure>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                    <figure class="effect-julia">
                      <img src="public/img/3.jpg" alt="img21"/>
                      <figcaption>
                        <h4>Mayor <span></span></h4>
            
                        <a  id="navBtn" href="alcalde.php?#contentHolder">View more</a>
                      </figcaption>			
                    </figure>
                  </div>'; }?>
                  <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                            <figure class="effect-julia">
                              <img src="public/img/4.jpg" alt="img21"/>
                              <figcaption>
                                <h4>Turismo<span></span></h4>
                    
                                <a  id="navBtn" href="fiestas.php?#contentHolder">View more</a>
                              </figcaption>			
                            </figure>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                    <figure class="effect-julia">
                      <img src="public/img/4.jpg" alt="img21"/>
                      <figcaption>
                        <h4>Turism<span></span></h4>
            
                        <a  id="navBtn" href="fiestas.php?#contentHolder">View more</a>
                      </figcaption>			
                    </figure>
                  </div>'; }?>
                        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                            <figure class="effect-julia">
                              <img src="public/img/5.jpg" alt="img21"/>
                              <figcaption>
                                <h4>Comercio<span></span></h4>
                    
                                <a  id="navBtn" href="comercio.php?#contentHolder">View more</a>
                              </figcaption>			
                            </figure>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                    <figure class="effect-julia">
                      <img src="public/img/5.jpg" alt="img21"/>
                      <figcaption>
                        <h4>Commerce<span></span></h4>
            
                        <a  id="navBtn" href="comercio.php?#contentHolder">View more</a>
                      </figcaption>			
                    </figure>
                  </div>'; }?>
                      
                      <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                            <figure class="effect-julia">
                              <img src="public/img/6.jpg" alt="img21"/>
                              <figcaption>
                                <h4>Aspectos <span>Físicos</span></h4>
                    
                                <a  id="navBtn" href="aspectos.php?#contentHolder">View more</a>
                              </figcaption>			
                            </figure>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<div class="cstyle_tumama col-xs-12 col-sm-6 col-md-4 col-lg-2" style = "padding: 0;">
                    <figure class="effect-julia">
                      <img src="public/img/6.jpg" alt="img21"/>
                      <figcaption>
                        <h4>Appearance <span></span></h4>
            
                        <a  id="navBtn" href="aspectos.php?#contentHolder">View more</a>
                      </figcaption>			
                    </figure>
                  </div>'; }?>
                  
                </div>

              </div>

            <div id="scripts">
            <?php
                require 'scripts.php';
            ?>
            </div>
            <?php
                require 'footer.php';
            ?>
            </div>
          </body>
</html>
