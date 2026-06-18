<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="boomblez";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }

    $CI=$_POST['CI'];
    $nombre=$_POST['nombre'];
    $tele=$_POST['tele'];
    $correo=$_POST['email'];
    $comentarios=$_POST['comentarios'];
    $dire=$_POST['direccion'];

    $sql="UPDATE registro SET nombre='$nombre', tele='$tele', naci='$naci', correo='$correo', contraseña='$contraseña', reportes='$reportes', tipo='$tipo', dire='$dire' WHERE CI='$CI'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: readadmin.php");
    }