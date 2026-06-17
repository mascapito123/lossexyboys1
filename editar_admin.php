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

    $id=$_GET['id'];
    $sql="SELECT * FROM adminis WHERE id='$id'";
    $query= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
 
.use {
background-color: white;
max-width: 600px;
margin: auto;
padding: 20px;
border-radius: 8px;
}
.use-label {
display: block;
margin-top: 15px;
font-weight: bold;
}
.use-input {
width: 99%;
padding: 10px;
margin-top: 5px;
border: 1px solid black;
border-radius: 4px;
}
.bot {
background-color: #8df491;
color: black;
padding: 10px 20px;
border: none;
margin-top: 20px;
width: 100%;
font-size: 25px;
}
    </style>   
</head>
<body>
    <?php
include ("encabezado.php");
?>
    <form action="editado_admin.php" method="post" class="use">
        <label for="id">ID:</label>
        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" reandonly><br>

        <label for="usuario" class="use-label">Usuario:</label>
        <input type="text" class="use-input" id="usuario" name="usuario" required value="<?php echo $row['usuario']; ?>"><br>

        <label for="nombre">Nombre:</label>
        <input type="text" class="use-input" id="nombre" name="nombre" required value="<?php echo $row['nombre']; ?>"><br>

        <label for="tele" class="use-label">Teléfono:</label>
        <input type="text" class="use-input" id="tele" name="tele" required value="<?php echo $row['tele']; ?>"><br>

        <label for="naci" class="use-label">Fecha de nacimiento:</label>
        <input type="date" class="use-input" id="naci" name="naci" required value="<?php echo $row['naci']; ?>"><br>

        <label for="correo" class="use-label">Correo:</label>
        <input type="email" class="use-input" id="correo" name="correo" required value="<?php echo $row['correo']; ?>"><br>

        <label for="contraseña" class="use-label">Contraseña:</label>
        <input type="password" class="use-input" id="contraseña" name="contraseña" required><br>

        <label for="reportes" class="use-label">Reportes:</label>
        <input type="text" class="use-input" id="reportes" name="reportes" required value="<?php echo $row['reportes']; ?>"><br>

        <label for="tipo" class="use-label">Tipo:</label>
        <input type="text" class="use-input" id="tipo" name="tipo" required value="<?php echo $row['tipo']; ?>"><br>

        <label for="dire" class="use-label">Dirección:</label>
        <input type="text" class="use-input" id="dire" name="dire" required value="<?php echo $row['dire']; ?>"><br>
    
                <input type="submit" value="Registrar" class="bot">
    </form>
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>