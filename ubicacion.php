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
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Ubicacion Geografica</title>

    <?php 
          include 'head.php' ;
          ?>
      
       
       <!-- Style propio -->
    <link id="otros" rel="stylesheet" type="text/css" href="public/css/ubicacion.css" media="screen" title="no title" charset="utf-8"/>

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
                            echo '<h1>Ubicación geográfica</h1>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<h1>Geographic</h1>'; }?> 
              </div>
        </section>
    
        <section id="main">
          <div class="container">
            <article id="main-col">
            <?php 
            if(isset($_SESSION['language']) && $_SESSION['language']==1){
                        echo '<audio id="hisAudio">
                        <source src="public/audio/UbicacionG.mp3" type="audio/mpeg">
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
                <source src="public/audio/en/UbicacioneG_EN.mp3" type="audio/mpeg">
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
<h1>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT subtituloUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["subtituloUbicacionGeografica"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT subtituloUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["subtituloUbicacionGeograficaEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
              </h1>
              <p align = justify>
                  <?php
                    if($_SESSION['language'] == 1){
                      $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-01'";
            
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoUbicacionGeografica"];
                      } else {
                        echo "0 results";
                      }
                    }else{
                      $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-01'";
            
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoUbicacionGeograficaEn"];
                      } else {
                        echo "0 results";
                      }
                    }
                  ?>
              </p>
            <h3>
              <b>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT subtituloUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["subtituloUbicacionGeografica"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT subtituloUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["subtituloUbicacionGeograficaEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
              </b>
            </h3>
            <p align = justify>
              <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-02'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoUbicacionGeografica"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-02'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["parrafoUbicacionGeograficaEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?> Km<sup>2</sup>.
            </p>
            <h3>
              <b>
                <?php
                if($_SESSION['language'] == 1){
                  $sql = "SELECT subtituloUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-03'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["subtituloUbicacionGeografica"];
                  } else {
                    echo "0 results";
                  }
                }
                else {
                  $sql = "SELECT subtituloUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-03'";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      echo $row["subtituloUbicacionGeograficaEn"];
                  } else {
                    echo "0 results";
                  }
                }
              ?>
              </b>
            </h3>
            <div class="container">
              <div class="row">
                <div class="col dark" style = "margin-right: 10px; border-radius: 10px;">
                  <p align = justify style = "color: white; font-size: 18px;">
                    <?php
                    if($_SESSION['language'] == 1){
                        $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-03' AND idUbicacionGeografica < 'contentId-20'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeografica"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                      else {
                        $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-03' AND idUbicacionGeografica < 'contentId-20'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeograficaEn"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                    ?>
                  </p>
                  <p>
                    <?php
                      if($_SESSION['language'] == 1){
                        $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica > 'contentId-03' AND idUbicacionGeografica < 'contentId-20'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeografica"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                      else {
                        $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica > 'contentId-03' AND idUbicacionGeografica < 'contentId-20'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeograficaEn"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                    ?>
                  </p>
                </div>
                <div class="col dark" style = "border-radius: 10px; ">
                  <p style = "color: white; font-size: 18px;">
                    <?php
                      if($_SESSION['language'] == 1){
                        $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-20'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeografica"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                      else {
                        $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-20'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeograficaEn"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                    ?>
                  </p>
                  <p>
                    <?php
                      if($_SESSION['language'] == 1){
                        $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica > 'contentId-20' AND idUbicacionGeografica < 'contentId-25'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeografica"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                      else {
                        $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica > 'contentId-20' AND idUbicacionGeografica < 'contentId-25'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeograficaEn"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                    ?>
                  </p>
                  <p>
                    <?php
                      if($_SESSION['language'] == 1){
                        $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-25'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeografica"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                      else {
                        $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-25'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeograficaEn"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                    ?>
                  </p>
                  <p>
                    <?php
                      if($_SESSION['language'] == 1){
                        $sql = "SELECT parrafoUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica > 'contentId-25' AND idUbicacionGeografica < 'contentId-34'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeografica"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                      else {
                        $sql = "SELECT parrafoUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica > 'contentId-25' AND idUbicacionGeografica < 'contentId-34'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                              echo $row["parrafoUbicacionGeograficaEn"] . "<br>";
                            }
                        } else {
                          echo "0 results";
                        }
                      }
                    ?>
                  </p>
                </div>
              </div>
            
            </div>
          
          
        </article>

        <aside id="sidebar">
        <div class= "grid row"id="btns">
        <h2>
          <br>
          <?php
            if($_SESSION['language'] == 1){
              $sql = "SELECT subtituloUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-34'";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()){
                    echo $row["subtituloUbicacionGeografica"];
                  }
              } else {
                echo "0 results";
              }
            }
            else {
              $sql = "SELECT subtituloUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-34'";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()){
                    echo $row["subtituloUbicacionGeograficaEn"];
                  }
              } else {
                echo "0 results";
              }
            }
          ?>
        </h2>
          <a id="navBtn" href="map.php?#contentHolder">
          <div class="style_tumama " style = "padding: 0;">
                <figure class="effect-julia" >
                  <img src="public/img/10.JPG" alt="img22"/>
                  <figcaption>
                    <h4>
                      <?php
                        if($_SESSION['language'] == 1){
                          $sql = "SELECT subtituloUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-35'";

                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()){
                                echo $row["subtituloUbicacionGeografica"];
                              }
                          } else {
                            echo "0 results";
                          }
                        }
                        else {
                          $sql = "SELECT subtituloUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-35'";

                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()){
                                echo $row["subtituloUbicacionGeograficaEn"];
                              }
                          } else {
                            echo "0 results";
                          }
                        }
                      ?>
                      <br>
                      <span>
                        <?php
                          if($_SESSION['language'] == 1){
                            $sql = "SELECT subtituloUbicacionGeografica FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-36'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                  echo $row["subtituloUbicacionGeografica"];
                                }
                            } else {
                              echo "0 results";
                            }
                          }
                          else {
                            $sql = "SELECT subtituloUbicacionGeograficaEn FROM ubicacion_geografica WHERE idUbicacionGeografica = 'contentId-36'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                  echo $row["subtituloUbicacionGeograficaEn"];
                                }
                            } else {
                              echo "0 results";
                            }
                          }
                        ?>                             
                      </span>
                    </h4>
        
                    
                  </figcaption>			
                </figure>
              </div>  
                </a>  
    </div>
    </aside>
      </div>
    </section>


</div> <!-- content Holder -->
</div> <!-- content Wrapper -->

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
