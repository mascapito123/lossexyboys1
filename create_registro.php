<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boomblez";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$CI = $_POST['CI'];
$comentarios = $_POST['comentarios'];
$sql = "INSERT INTO registro (nombre, telefono, email, direccion, CI, comentarios) VALUES ('$nombre', '$telefono', '$email', '$direccion', '$CI', '$comentarios')";

if ($conn->query($sql) === TRUE) {
    header("location: pagina_principal.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
    

$conn->close();
?>
    