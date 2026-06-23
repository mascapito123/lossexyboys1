<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="carrito";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }

    $codigo=NULL;
    $nombre=$_POST['usuario'];
    $estado=$_POST['estado'];
    $producto=$_POST['produc'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    $vendedor=$_POST['vendedor'];
    $fecha=NULL;

    $fechactual= date("Y-m-d");

    $sql="INSERT INTO carro (codigo,producto,nombre,estado,cantidad,precio,vendedor,fecha_registro) VALUES ('$codigo','$producto','$nombre','$estado','$cantidad','$precio','$vendedor','$fechactual')";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: ../productos.php");
    }