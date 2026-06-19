
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nombreBD = "admin2";

$conn = new mysqli($servidor, $usuario, $contraseña, $nombreBD);

if ($conn->connect_error) {
    die("Error de conexión");
}

$sql = "SELECT * FROM produc";
$query = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Productos</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background: linear-gradient(#b6d7a8, rgb(70,180,166));
    min-height:100vh;
    padding:40px;
}

h1{
    text-align:center;
    color:white;
    margin-bottom:30px;
    font-size:40px;
}

.contenedor{
    max-width:1200px;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,.2);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#222;
    color:white;
    padding:15px;
}

td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tr:hover{
    background:#f5f5f5;
}
</style>

</head>
<body>

<h1>LISTA DE PRODUCTOS</h1>

<div class="contenedor">

<table>
    <tr>
        <th>USUARIO</th>
        <th>PRODUCTO</th>
        <th>CANTIDAD</th>
        <th>PRECIO</th>
        <th>TIPO</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($query)): ?>
    <tr>
        <td><?php echo $row['usuario']; ?></td>
        <td><?php echo $row['nombrepro']; ?></td>
        <td><?php echo $row['cantidad']; ?></td>
        <td>$<?php echo $row['precio']; ?></td>
        <td><?php echo $row['tipo']; ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</div>

</body>
</html>

