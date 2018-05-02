<?php
session_start();
?>

<?php
if(!isset($_SESSION['loggedin'])){
    header("Location: session.php");
}
        
$servername = "localhost";
$username_db = "ciudad_arce";
$password_db = "root";
$dbname = "ciudad_arce";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
/*
Finding hash for password, not recommended for security terms
$contrasenia=password_hash($_POST["password"],PASSWORD_DEFAULT);
 */
$sql = "SELECT * FROM usuario WHERE nombreUsuario = '$username'";

$result = $conn->query($sql);
if($result->num_rows > 0){

}
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if(password_verify($password, $row['passwordUsuario'])){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (2.4 * 60);
        /*echo "Bienvenido! " . $_SESSION['username'];
        echo "<br><br><a href=panel-control.php>Panel de Control</a>";*/
        header("Location: contacto.php");
    } else{
        // echo "Username o Password incorrectos.";
        // echo "<br><a href='session.php'> Volver a Intentarlo</a>";
        header("Location: session.php");
    }
    mysqli_close($conn);

?>



