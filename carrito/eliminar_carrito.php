<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="carrito";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }

    $codigo=$_GET['codigo'];

    $sql="DELETE FROM carro WHERE codigo='$codigo'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: ../productos.php");
    }
?>