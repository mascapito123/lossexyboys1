<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="admin2";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }

    $codigo=$_POST['codigo'];
    $usuario=$_POST['usuario'];
    $nombrepro=$_POST['nombrepro'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $tipo=$_POST['tipo'];

    $sql="UPDATE produc SET usuario='$usuario', nombrepro='$nombrepro', precio='$precio', cantidad='$cantidad', tipo='$tipo' WHERE codigo='$codigo'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: vendedor.php");
    }