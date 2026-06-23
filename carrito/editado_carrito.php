<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="carrito";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }

    $codigo=$_POST['codigo'];
    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];

    $sql="UPDATE carro SET producto='$producto', cantidad='$cantidad', precio='$precio' WHERE codigo='$codigo'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: readcarrito.php");
    }