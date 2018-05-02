<?php
session_start();
    $servername = "localhost";
    $username = "ciudad_arce";
    $password = "root";
    $dbname = "ciudad_arce"; //Español (1) Inglés (0)
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
    <title>Historia</title>

    <?php 
    include 'head.php' ;
    ?>
                <!-- style propio -->
            <link id="otros" rel="stylesheet" type="text/css" href="public/css/historia.css" media="screen" title="no title" charset="utf-8"/>

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
                            echo '<h1>Historia de Ciudad Arce</h1>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<h1>History of Ciudad Arce</h1>'; }?> 
        
      </div>
    </section>
    
    <section id="main">
      <div class="container">
        <article id="main-col">
        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<h1>Historia de Ciudad Arce</h1>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<h1>History of Ciudad Arce</h1>'; }?> 

<?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<audio id="hisAudio">
                            <source src="public/audio/Historia.mp3" type="audio/mpeg">
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
                    <source src="public/audio/en/Historia_EN.mp3" type="audio/mpeg">
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

<br>
<h1>
    <?php

              if($_SESSION['language'] == 1) {
                $sql = "SELECT subtituloHistoria FROM historia WHERE idHistoria = 'contentId-01'";
              
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloHistoria"];
                }
                else {
                  echo "0 results";
                }  
              }
              else {
                $sql = "SELECT subtituloHistoriaEn FROM historia WHERE idHistoria = 'contentId-01'";
              
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloHistoriaEn"];
                }
                else {
                  echo "0 results";
                }
              }
              
            ?>
          </h1>
          <?php
            if($_SESSION['language'] == 1) {
              $sql = "SELECT parrafoHistoria FROM historia WHERE idHistoria <'contentId-07'";
            
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<p align="."justify".">" . $row["parrafoHistoria"]. "</p>";
                }
              } 
              else {
                echo "0 results";
              }  
            }
            else {
              $sql = "SELECT parrafoHistoriaEn FROM historia WHERE idHistoria < 'contentId-07'";
            
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<p align="."justify".">" . $row["parrafoHistoriaEn"]. "</p>";
                }
              } 
              else {
                echo "0 results";
              }
            }
          ?>
        </article>

        <aside id="sidebar">
          <div class="dark">
          <h2>
              <?php
              if($_SESSION['language'] == 1) {
                $sql = "SELECT subtituloHistoria FROM historia WHERE idHistoria = 'contentId-07'";
              
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloHistoria"];
                }
                else {
                  echo "0 results";
                }  
              }
              else {
                $sql = "SELECT subtituloHistoriaEn FROM historia WHERE idHistoria = 'contentId-07'";
              
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloHistoriaEn"];
                }
                else {
                  echo "0 results";
                }
              }
              
            ?>
            </h2>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoHistoria FROM historia WHERE idHistoria = 'contentId-07'";

                  $result = $conn->query($sql);

                  if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoHistoria"];
                  }
                  else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoHistoriaEn FROM historia WHERE idHistoria = 'contentId-07'";
              
                  $result = $conn->query($sql);

                  if($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoHistoriaEn"];
                  }
                  else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
          </div>  
        </aside>
      </div>
    </section>

</div> <!--content holder -->
</div> <!--content wrapper -->

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
