<?php
$servername = "localhost";
$username_db = "ciudad_arce";
$password_db = "root";
$dbname = "ciudad_arce";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `comentario`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: contacto.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
