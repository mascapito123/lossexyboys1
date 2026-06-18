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

    $CI=$_GET['CI'];

    $sql="DELETE FROM registro WHERE CI='$CI'";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: readadmin.php");
    }
?>