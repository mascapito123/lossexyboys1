<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="admin1";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }

    $id=$_POST['id'];
    $usuario=$_POST['usuario'];
    $nombre=$_POST['nombre'];
    $tele=$_POST['tele'];
    $naci=$_POST['naci'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $reportes=$_POST['reportes'];
    $tipo=$_POST['tipo'];
    $dire=$_POST['dire'];

    $sql="UPDATE adminis SET usuario='$usuario', nombre='$nombre', tele='$tele', naci='$naci', correo='$correo', contraseña='$contraseña', reportes='$reportes', tipo='$tipo', dire='$dire' WHERE id='$id'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: readadmin.php");
    }