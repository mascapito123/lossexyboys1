<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boomblez";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Hubo un error :(";
}

$sql = "SELECT * FROM registro";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de registros</title>

<style>
    header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
  }
  header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
  }
  header img.logo {
    height: 100px;
    width: 100px;
  }
  nav ul {
    display: grid;
    grid-auto-flow: column;
    justify-content: center;
    list-style: none;
    gap: 70px;
  }
  nav a {
    color: #fff;
    text-decoration: none;
  }
  nav a:hover {
    color: #5eff6ce5;
  }
  .container {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            color: white;
            text-align: center;
    }
    .container2 {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            text-align: center;
            color: rgb(127, 255, 170);
    }
  .dropdown {
  position: relative;
  display: inline-block;
}

  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #111;
  min-width: 160px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 5px;
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #333;
  color: #5eff6ce5;
}
.dropdown:hover .dropdown-content {
  display: block;
}
    .sections {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 40px auto;
  }

main.main {
  flex: 1;               
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
}

.form-box{
  background: linear-gradient(180deg,#16a34a 0%, #059669 100%); 
  padding: 28px;
  border-radius: 12px;
  width: 100%;
  max-width: 750px;
  box-shadow: 0 12px 30px rgba(2,6,23,0.6);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.08);
}

.form-box h1{
  text-align: center;
  font-size: 1.6rem;
  margin-bottom: 16px;
  letter-spacing: 1px;
  text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}

.item {
    background: rgba(255,255,255,0.15);
    padding: 14px;
    border-radius: 10px;
    margin-bottom: 12px;
    border: 1px solid rgba(255,255,255,0.1);
}

.item b{
    color: #fff;
}

.actions button{
    background: #064e3b;
    color: #fff;
    border: none;
    padding: 6px 12px;
    margin-right: 6px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    box-shadow: 0 4px 14px rgba(0,0,0,0.35);
}
.actions button:hover{
    background:#05392e;
}
.dropdown > a {
    cursor: pointer;
}

</style>
</head>
<body>

<?php
include ("encabezadousua.php");
?>

<main class="main">
<div class="form-box">

<h1>Lista de registros</h1>

<?php
if ($resultado->num_rows > 0) {

    while($fila = $resultado->fetch_assoc()) {

        echo "<div class='item'>";
        echo "<b>Nombre:</b> ".$fila['nombre']."<br>";
        echo "<b>Teléfono:</b> ".$fila['telefono']."<br>";
        echo "<b>Email:</b> ".$fila['email']."<br>";
        echo "<b>Dirección:</b> ".$fila['direccion']."<br>";
        echo "<b>CI:</b> ".$fila['CI']."<br>";
        echo "<b>Comentarios:</b> ".$fila['comentarios']."<br><br>";
        $CI = $fila['CI'];
        echo "<div class='actions'>";
        echo "<a href='../usuarios/editar_registro.php?CI=$CI'><button>Editar</button></a>";
        echo "<a href='../usuarios/eliminar_registro.php?CI=$CI'><button>Eliminar</button></a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "<p>No hay registros disponibles.</p>";
}
?>
</div>
</main>
    <?php
     include("../pie_pg.php");
    ?>
</body>
</html>
