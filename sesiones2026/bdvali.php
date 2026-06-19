<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = mysqli_connect("localhost", "root", "", "admin1");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM adminis WHERE usuario='$usuario' AND pass='$pass'";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {

    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $fila['usuario'];

    header("Location: ../pagina_principal.php");
    exit();

} else {
    echo "Usuario o contraseña incorrectos";
}