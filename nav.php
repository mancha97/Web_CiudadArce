<!-- Navigation -->
<?php
?> 
<div id="navFix" style="height:0; background-color: black;"> </div>
<nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
    <div class="container">
        <a id="navBtn" class="navbar-brand js-scroll-trigger" href="index.php?#contentHolder">CIUDAD ARCE</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                    <?php 
                        if((isset($_SESSION['language'])) && $_SESSION['language']==1){
                            echo "<li class="."nav-item".">
                            <a id="."navBtn"." class="."nav-link js-scroll-trigger"." href="."index.php?#contentHolder".">"."Inicio</a></li>";
                        }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                            echo "<li class="."nav-item".">
                            <a id="."navBtn"." class="."nav-link js-scroll-trigger"." href="."index.php?#contentHolder".">"."Home</a></li>";

                        }?>
            <?php 
            if(isset($_SESSION['language']) && $_SESSION['language']==1){
                echo "<li class="."nav-item".">
                <a id="."navBtn"." class="."nav-link js-scroll-trigger"." href="."historia.php?#contentHolder".">"."Historia</a></li>";
            }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                echo "<li class="."nav-item".">
                <a id="."navBtn"." class="."nav-link js-scroll-trigger"." href="."historia.php?#contentHolder".">"."History</a></li>";

            }?>
         <?php 
         if(isset($_SESSION['language']) && $_SESSION['language']==1){
             echo "<li class="."nav-item".">
             <a id="."navBtn"." class="."nav-link js-scroll-trigger"." href="."contacto.php?#contentHolder".">"."Contacto</a></li>";
         }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
             echo "<li class="."nav-item".">
             <a id="."navBtn"." class="."nav-link js-scroll-trigger"." href="."contacto.php?#contentHolder".">"."Contact</a></li>";

         }?>    
            <li class="nav-item">
              <a id="" class="nav-link js-scroll-trigger" href="lang.php">
<img style="margin: 0;" img src="public/img/icons/lang.png" alt="">EN/ES</a>
            </li>
        </ul>
    </div>
    </div>
     <a href="#menu-toggle" class="" id="menu-toggle">
    <img src="public/img/icons/menu.png" alt=""></a>
</nav>

<!-- sideNav -->
<div id="wrapper2">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo "<li class="."nav-item".">
                            <a id="."navBtn"." class="."js-scroll-trigger"." href="."index.php?#contentHolder".">"."Inicio</a></li>";
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                            echo "<li class="."nav-item".">
                            <a id="."navBtn"." class="."js-scroll-trigger"." href="."index.php?#contentHolder".">"."Home</a></li>";
                }?>
                <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li>
                            <a id="navBtn" class="js-scroll-trigger" href="alcalde.php?#contentHolder">Alcaldia</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li>
                    <a id="navBtn" class="js-scroll-trigger" href="alcalde.php?#contentHolder">Mayor</a>
                </li>'; }?>
                 <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li>
                            <a id="navBtn" class="js-scroll-trigger" href="fiestas.php?#contentHolder">Turismo</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li>
                    <a id="navBtn" class="js-scroll-trigger" href="fiestas.php?#contentHolder">Turism</a>
                </li>'; }?>
                 <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li>
                            <a id="navBtn" class="js-scroll-trigger" href="comercio.php?#contentHolder">Comercio</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li>
                    <a id="navBtn" class="js-scroll-trigger" href="comercio.php?#contentHolder">Commerce</a>
                </li>'; }?>
                
                <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li>
                            <a id="navBtn" class="js-scroll-trigger" href="map.php?#contentHolder">Mapa</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li>
                    <a id="navBtn" class="js-scroll-trigger" href="map.php?#contentHolder">Map</a>
                </li>'; }?>
                <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li>
                            <a id="navBtn" class="js-scroll-trigger" href="aspectos.php?#contentHolder">Aspecto Fisico</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li>
                    <a id="navBtn" class="js-scroll-trigger" href="aspectos.php?#contentHolder">Apearance</a>
                </li>'; }?>
                
            </ul>
        </div>
</div>
<!-- sideNav -->
