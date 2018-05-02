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
    <link id="otros" rel="stylesheet" type="text/css" href="public/css/aspectos.css" media="screen" title="no title" charset="utf-8"/>

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
                  echo '<h1>Aparencia Física</h1>';
      }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
          echo '<h1>Appearance</h1>'; }?> 
      </div>
    </section>
    
    <section id="main">
      <div class="container">
        <article id="main-col">
        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<audio id="hisAudio">
                            <source src="public/audio/AspectosF.mp3" type="audio/mpeg">
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
                    <source src="public/audio/en/AspectosF_EN.mp3" type="audio/mpeg">
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
<h3>
              <b>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT tipoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT tipoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisicoEn"];
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
                    $sql = "SELECT parrafoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisicoEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
                <br>
              </p>
            <h3>
              <b>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT tipoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT tipoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisicoEn"];
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
                    $sql = "SELECT parrafoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-02'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisicoEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
                <br>
              </p>
            <h3>
              <b>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT tipoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-03'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT tipoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-03'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisicoEn"];
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
                    $sql = "SELECT parrafoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-03'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-03'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisicoEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
                <br>
              </p>
            <h3>
              <b>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT tipoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-04'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT tipoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-04'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisicoEn"];
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
                    $sql = "SELECT parrafoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-04'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-04'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisicoEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
                <br>
              </p>
            <h3>
              <b>
                <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT tipoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-05'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT tipoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-05'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["tipoAspectoFisicoEn"];
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
                    $sql = "SELECT parrafoAspectoFisico FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-05'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisico"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT parrafoAspectoFisicoEn FROM aspecto_fisico WHERE idAspectoFisico = 'contentId-05'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["parrafoAspectoFisicoEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
              <br></p>
          
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h2>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT subtituloPoblacion FROM poblacion WHERE idPoblacion = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["subtituloPoblacion"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT subtituloPoblacionEn FROM poblacion WHERE idPoblacion = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["subtituloPoblacionEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
              </h2>
            <p>
              <?php
                  if($_SESSION['language'] == 1){
                    $sql = "SELECT cantidadPoblacion FROM poblacion WHERE idPoblacion = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["cantidadPoblacion"];
                    } else {
                      echo "0 results";
                    }
                  }
                  else {
                    $sql = "SELECT cantidadPoblacionEn FROM poblacion WHERE idPoblacion = 'contentId-01'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["cantidadPoblacionEn"];
                    } else {
                      echo "0 results";
                    }
                  }
                ?>
                <br></p>
              <div><img src="public/img/aspectos2.jpg" alt= "imagen de poblacion de ciudad Arce" width="100%" ></div>
              
          </div>
           
        </aside>    
      </div>
    </section>

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

  </body>
</html>
