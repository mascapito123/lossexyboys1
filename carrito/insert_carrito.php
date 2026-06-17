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

    $codigo=NULL;
    $producto=$_POST['produc'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];

    $sql="INSERT INTO carro (codigo,producto,cantidad,precio) VALUES ('$codigo','$producto','$cantidad','$precio')";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: readcarrito.php");
    }