<?php 
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "admin1");
    if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];
    echo $usuario;
    echo $pass;

if ($usuario == "Leo" && $pass == "123") {
    $_SESSION['usuario'] = "Leo";
    $_SESSION['edad'] = "18";
    header("Location:../admin/adminbueno.php"); 
    exit();
} 
elseif ($usuario == "Alexander" && $pass == "123") {
    $_SESSION['usuario'] = "Alexander";
    $_SESSION['edad'] = "17";
    header("Location:../admin/adminbueno.php");
    exit();
} 
elseif ($usuario == "Isac" && $pass == "123") {
    $_SESSION['usuario'] = "Isac";
    $_SESSION['edad'] = "17";
    header("Location:../admin/adminbueno.php");
    exit();
} 
elseif ($usuario == "Mateo" && $pass == "123") {
    $_SESSION['usuario'] = "Mateo";
    $_SESSION['edad'] = "17";

    header("Location:../admin/adminbueno.php");
    exit();
} 
elseif ($usuario == "Fernando" && $pass == "123") {
    $_SESSION['usuario'] = "Fernando";
    $_SESSION['edad'] = "17";
    header("Location:../admin/adminbueno.php");
    exit();
} 
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