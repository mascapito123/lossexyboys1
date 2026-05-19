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

    $codigo=$_GET['codigo'];

    $sql="DELETE FROM produc WHERE codigo='$codigo'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: vendedor.php");
    }