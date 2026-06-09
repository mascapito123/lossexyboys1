<?php
$servidor = "localhost";
$contraseña = "";
$usuario = "root";
$nombreBD = "registro";

$conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD)
if($conn -> connect_error){
    echo "no te conectaste";
}
else{
    echo "si te conectaste"."<br>";
}

$id=$_GET['id'];

$sql="DELETE FROM adminis WHERE id='$id'";
$query= mysqli_query($conn,$sql);

if($query){
    header("location: registro.php");
}
?>