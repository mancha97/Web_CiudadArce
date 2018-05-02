<?php
session_start();
    $servername = "localhost";
    $username = "ciudad_arce";
    $password = "root";
    $dbname = "ciudad_arce";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $mysqli = $conn->query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Comercio</title>

    <?php 
          include 'head.php' ;
    ?>
      
       
       <!-- Style propio -->
    <link id="otros" rel="stylesheet" type="text/css" href="public/css/comercio.css" media="screen" title="no title" charset="utf-8"/>

  </head>
  <body>

    <?php
      require 'nav.php';
    ?>

<div id="page-content-wrapper container-fluid" style="height:100%;"> 
<div id="contentHolder">
<div style="background-color: white;">
    <section id="showcase">
      <div class="container">
      <?php 
      if(isset($_SESSION['language']) && $_SESSION['language']==1){
                  echo '<h1>Comercio</h1>';
      }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
          echo '<h1>Commerce</h1>'; }?> 
      </div>
    </section>
    
    <section id="main">
      <div class="container">
        <article id="main-col">
        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<audio id="hisAudio">
                            <source src="public/audio/Comercio.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                          </audio>
                              <div class="row">
                                  <div class="col-sm-4">
                                      <button class="btn" onclick="playAudio('.'\'#hisAudio\''.')" type="button">Reproducir </button>
                                  </div>
                                  <div class="col-sm-4">
                                      <button class="btn" onclick="pauseAudio('.'\'#hisAudio\''.')" type="button">Pausar</button>
                                  </div>
                          </div>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<audio id="hisAudio">
                    <source src="public/audio/en/Comercio_EN.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                      <div class="row">
                          <div class="col-sm-4">
                              <button class="btn" onclick="playAudio('.'\'#hisAudio\''.')" type="button">Play </button>
                          </div>
                          <div class="col-sm-4">
                              <button class="btn" onclick="pauseAudio('.'\'#hisAudio\''.')" type="button">Pause</button>
                          </div>
                  </div>'; }?> 
<h1>Comercio de Ciudad Arce.</h1>
            <p align = justify>
               <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoComercio FROM comercio WHERE idComercio = 'contentId-01'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercio"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoComercioEn FROM comercio WHERE idComercio = 'contentId-01'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercioEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
           
            </p>
            
            
            
          <p align = center>
            <img src="public/img/mercadoN.jpg" alt="Imagen de mercado nuevo de ciudad arce" width = "70%">
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h2>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoComercio FROM comercio WHERE idComercio = 'contentId-02'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercio"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoComercioEn FROM comercio WHERE idComercio = 'contentId-02'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercioEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </h2>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoComercio FROM comercio WHERE idComercio = 'contentId-03'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercio"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoComercioEn FROM comercio WHERE idComercio = 'contentId-03'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercioEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?><br>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoComercio FROM comercio WHERE idComercio = 'contentId-04'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercio"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoComercioEn FROM comercio WHERE idComercio = 'contentId-04'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercioEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?><br>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoComercio FROM comercio WHERE idComercio = 'contentId-05'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercio"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoComercioEn FROM comercio WHERE idComercio = 'contentId-05'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercioEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?><br>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoComercio FROM comercio WHERE idComercio = 'contentId-06'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercio"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoComercioEn FROM comercio WHERE idComercio = 'contentId-06'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoComercioEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
          </div>
        </aside>        
      </div>
    </section>

</div> <!-- content holder -->
</div> <!-- content wrapper -->

    <div id="scripts">
        <?php
          require 'scripts.php';
        ?>
    </div>
        <?php
          require 'footer.php';
        ?>
  </body>
</html>
