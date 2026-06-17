<?php 
    session_start();
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];
    echo $usuario;
    echo $pass;

if ($usuario == "Leo" && $pass == "123") {
    $_SESSION['usuario'] = "Leo";
    $_SESSION['edad'] = "18";
    $acceso_valido = true;
    header("Location:../adminbueno.php"); 
    exit();
} 
elseif ($usuario == "Alexander" && $pass == "123") {
    $_SESSION['usuario'] = "Alexander";
    $_SESSION['edad'] = "17";
    $acceso_valido = true;
    header("../adminbueno.php");
    exit();
} 
elseif ($usuario == "Isac" && $pass == "123") {
    $_SESSION['usuario'] = "Isac";
    $_SESSION['edad'] = "17";
    $acceso_valido = true;
    header("Location:../adminbueno.php");
    exit();
} 
elseif ($usuario == "Mateo" && $pass == "123") {
    $_SESSION['usuario'] = "Mateo";
    $_SESSION['edad'] = "17";
    $acceso_valido = true;
    header("Location: adminbueno.php");
    exit();
} 
elseif ($usuario == "Fernando" && $pass == "123") {
    $_SESSION['usuario'] = "Fernando";
    $_SESSION['edad'] = "17";
    $acceso_valido = true;
    header("Location:../adminbueno.php");
    exit();
} 
else {
    header("Location:maquetacion.php");
    exit();
}
?>