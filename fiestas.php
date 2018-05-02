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
    <title>Fiestas Patronales</title>

    <?php
      require 'head.php';
    ?>
    <link id="otros" rel="stylesheet" type="text/css" href="public/css/fiestas.css" media="screen" title="no title" charset="utf-8"/>

  </head>
  <body>

    <?php
      require 'nav.php';
    ?>

<div id="page-content-wrapper container-fluid" style="height: 100%;"> 
    <div id="contentHolder" style="">
<div style="background-color: white;">
    <section id="showcase">
      <div class="container">
      <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<h1>Turismo</h1>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<h1>Turism</h1>'; }?> 
      </div>
    </section>
    
    <section id="main">
      <div class="container">
        <article id="main-col">
        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<audio id="hisAudio">
                            <source src="public/audio/Turismo.mp3" type="audio/mpeg">
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
                    <source src="public/audio/en/Turismo_EN.mp3" type="audio/mpeg">
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
<h1>Fiestas Patronales</h1>
            <p align = justify>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>                
            </p>
            
            <p align = justify>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
            </p>
            
            
            <p align = justify>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-03'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-03'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>            
            </p>
            
            <p align = justify>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-04'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-04'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
            </p>
            
          <p align = justify>
            <img src="public/img/fiestas.jpg" alt="Imagen de las fiestas patronales" height="360" width="600" style = "text-align: center">
          </p>

          <h1>Sitios Turisticos</h1>

          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-01'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-01'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <h3>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-02'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-02'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </h3>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-02'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-02'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-03'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-03'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-04'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-04'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <h3>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-05'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-05'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </h3>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-05'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-05'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-06'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-06'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <h3>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-07'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-07'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </h3>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-07'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-07'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
          <h3>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT nombreSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["nombreSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </h3>
          <p align = justify>
            <?php
              if($_SESSION['language'] == 1){
                $sql = "SELECT parrafoSitioTuristico FROM sitio_turistico WHERE idSitioTuristico = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristico"];
                } else {
                  echo "0 results";
                }
              }
              else {
                $sql = "SELECT parrafoSitioTuristicoEn FROM sitio_turistico WHERE idSitioTuristico = 'contentId-08'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["parrafoSitioTuristicoEn"];
                } else {
                  echo "0 results";
                }
              }
            ?>
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-05'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-05'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
            </h3>
            <p align = justify>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-06'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-06'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
                </p>
            <p align = justify>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-07'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-07'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
            </p>
            <p align = justify>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT parrafoFiestaPatronal FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-08'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronal"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoFiestaPatronalEn FROM fiesta_patronal WHERE idFiestaPatronal = 'contentId-08'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoFiestaPatronalEn"];
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
