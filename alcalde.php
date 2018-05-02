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
    <title>Alcalde Municipal</title>

    <?php 
          include 'head.php' ;
          ?>
      
       
       <!-- Style propio -->
    <link id="otros" rel="stylesheet" type="text/css" href="public/css/alcalde.css" media="screen" title="no title" charset="utf-8"/>

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
                            echo '<h1>Alcaldía Municipal</h1>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<h1>City Hall</h1>'; }?> 
        
      </div>
    </section>
    
    <section id="main">
      <div class="container">
        <article id="main-col">
        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<audio id="hisAudio">
                            <source src="public/audio/AlcadiaM.mp3" type="audio/mpeg">
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
                    <source src="public/audio/en/AlcaldiaM_EN.mp3" type="audio/mpeg">
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
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT subtituloGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-01'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloGobiernoLocal"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT subtituloGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-01'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloGobiernoLocalEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </h1>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-01'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-01'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>          
            </p>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-02'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-02'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
            
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-03'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-03'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
            
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-04'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-04'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
            
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-05'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-05'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
            <h3>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT subtituloGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-06'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["subtituloGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT subtituloGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-06'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["subtituloGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </h3>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-06'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-06'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
            <h3>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT subtituloGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-07'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["subtituloGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT subtituloGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-07'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["subtituloGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </h3>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-07'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocal"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-07'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoGobiernoLocalEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
            </p>
            
          <div>
            <img src="public/img/alcalde.jpg" alt="Imagen del Dr. José Alfredo Contreras Escalón" style = "text-align: center; ">
          </div>  
        </article>

        <aside id="sidebar">
        <div class="dark">
          <h2>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT subtituloGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloGobiernoLocal"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT subtituloGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["subtituloGobiernoLocalEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </h2>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoGobiernoLocal FROM gobierno_local WHERE idGobiernoLocal = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoGobiernoLocal"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoGobiernoLocalEn FROM gobierno_local WHERE idGobiernoLocal = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoGobiernoLocalEn"];
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

</div> <!-- content Holder -->
</div> <!-- content Wrapper -->

<div id="scripts" >
    <?php
      require 'scripts.php';
    ?>
</div>
    <?php
      require 'footer.php';
    ?>

  </body>
</html>
