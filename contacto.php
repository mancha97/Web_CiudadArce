<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    }else{
?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width">
          <meta name="description" content="Affordable and professional web design">
          <meta name="keywords" content="web design, affordable web design, professional web design">
          <meta name="author" content="Brad Traversy">
          <title>Contacto</title>
      
          <?php 
                require 'head.php' ;
            ?>
            
               
               <!-- Style propio -->
          <link id="otros" rel="stylesheet" type="text/css" href="public/css/contacto.css" media="screen" title="no title" charset="utf-8"/>
      
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
              <h1>Contáctenos</h1>
              
            </div>
          </section>
          
          <section id="main">
            <div class="container">
              <article id="main-col">
                <h1>Contáctenos.</h1>
                  <p align = justify>
                      Alcalde Municipal: José Alfredo Contreras Villalta<br>
      Partido: FMLN<br>
      Dirección: Avenida Baden Powell, Calle Gerardo Barrios<br>
      Teléfonos:
      2342-7800<br>
      
                  </p>
                  
                
              </article>
      
              <aside id="sidebar">
                <div class="dark">
                  <h2>Correos: </h2>
                  <p>
                     Fax: 2330-9037<br>
      Email: alcaldia@ciudadarce.gob.sv<br>
      
                    </p>
                </div>
              </aside>
            </div>
          </section>
          <div class="dark forma" style="width: 50%; text-align: center;">
        <h1>Comentarios</h1>
            <form action="sendcomment.php" method="post" class="cf">
              <div class="half left cf">
                <input name="name" type="text" id="input-name" placeholder="Name">
                <input name="email" type="email" id="input-email" placeholder="Email address">
                <input name="subject" type="text" id="input-subject" placeholder="Subject">
              
              
                <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
               
              <input type="submit" value="Submit" id="input-submit">
                  </div>
            </form>
        </div>
      
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
   <?php exit;
   }
    $now = time();
    if($now > $_SESSION['expire']){
        session_destroy();
        /*echo "Su sesion ha terminado, necesita hacer <a href='session.php'>login</a>";*/
        header("Location: session.php");
        exit;
    }
    ?>
    <?php 
      $servername = "localhost";
      $username_db = "ciudad_arce";
      $password_db = "root";
      $dbname = "ciudad_arce";
      
      $conn = new mysqli($servername, $username_db, $password_db, $dbname);
      if ($conn->connect_error){
          die("Connection failed: " . $conn->connect_error);
      }
    ?>
    <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width">
          <meta name="description" content="Affordable and professional web design">
          <meta name="keywords" content="web design, affordable web design, professional web design">
          <meta name="author" content="Brad Traversy">
          <title>Contacto</title>
      
          <?php 
                include 'head.php' ;
                ?>
            
               
               <!-- Style propio -->
          <link id="otros" rel="stylesheet" type="text/css" href="public/css/contacto.css" media="screen" title="no title" charset="utf-8"/>
      
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
              <h1>Contáctenos</h1>
              
            </div>
          </section>
          
          <section id="main">
            <div class="container">
              <article id="main-col">
                <h1>Contáctenos.</h1>
                  <p align = justify>
                      Alcalde Municipal: José Alfredo Contreras Villalta<br>
                     
      Partido: FMLN<br>
      Dirección: Avenida Baden Powell, Calle Gerardo Barrios<br>
      Teléfonos:
      2342-7800<br>
      
                 
                  </p>
                  
                
              </article>
      
              <aside id="sidebar">
                <div class="dark">
                  <h2>Correos: </h2>
                  <p>
                     Fax: 2330-9037<br>
      Email: alcaldia@ciudadarce.gob.sv<br>
      
                    </p>
                </div>
              </aside>
            </div>
          </section>
      
      </div>
      <div class="container">
        <?php 
          $sql = "SELECT subject, message FROM comentario";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              echo "<h1 style=".'\'background-color: skyblue\''.">".$row["subject"]."</h1><div class="."row"."> <div class="."col"." id="."articulo"." 
              style="."text-align: right"."> <p align="."justify".">". $row["message"]."</p> </div> </div>";
            }
          }
          mysqli_close($conn);
          
        ?>
      </div> <!--content Holder -->
      </div> <!--content Wrapper -->

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
