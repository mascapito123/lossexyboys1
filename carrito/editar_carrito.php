<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="carrito";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }

    $codigo=$_GET['codigo'];
    $sql="SELECT * FROM carro WHERE codigo='$codigo'";
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
    transition: transform 0.3s ease;
  }
  header img.logo:hover {
    transform: scale(1.1);
  }
  nav ul {
    display: grid;
    grid-auto-flow: column;
    justify-content: center;
    list-style: none;
    gap: 20px;
  }
  nav a {
    color: #fff;
    text-decoration: none;
  }
  nav a:hover {
    color: #5eff6ce5;
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
include ("encabezadocarri.php");
?>
    <form action="editado_carrito.php" method="post" class="use">
        <label for="id" class="use-label">codigo:</label>
        <input type="text" class="use-input" id="codigo" name="codigo" value="<?php echo $row['codigo']; ?>" readonly><br>

        <label for="produc" class="use-label">producto:</label>
        <input type="text" class="use-input" id="producto" name="producto" required value="<?php echo $row['producto']; ?>"><br>

        <label for="cantidad" class="use-label">Cantidad:</label>
        <input type="number" class="use-input" id="cantidad" name="cantidad" required value="<?php echo $row['cantidad']; ?>"><br>

        <label for="precio" class="use-label">precio:</label>
        <input type="number" class="use-input" id="precio" name="precio" required value="<?php echo $row['precio']; ?>"><br>

        <input type="submit" value="Registrar" class="bot">
    </form>
    <?php
      include("../pie_pg.php");
    ?>
</body>
</html>