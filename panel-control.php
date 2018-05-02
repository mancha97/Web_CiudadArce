<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    }else{
        echo "Esta página es solo para usuatios registrado. <br>";
        echo "<br><a href='session.php'>Login</a>";
        echo "<br><br><a href='index.html'>Index page </a>";
        exit;
    }

    $now = time();
    if($now > $_SESSION['expire']){
        session_destroy();
        echo "Su sesion ha terminado, necesita hacer <a href='session.php'>login</a>";
        exit;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Panel de Control</title>
        </head>
        <body>
            <h1>Panel de Control</h1>
            <p>Aqui van los enlaces que le permitirian al usuario
            editar su perfil o cualquier otra cosa que desees.</p>
            <ul>
                <li>Editar Perfil</li>
                <li>Editar Preferencias</li>
                <li>Editar Configuracion</li>
                <li>etc.</li>
            </ul>
            <br><br>
            <a href=logout.php>Cerrar Sesion X </a>
        </body>
    </html>