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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

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
include ("encabezadoadmin.php");
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
      include("../pie_pg.php");
    ?>
<script>
  $(document).ready(function(){
    $(".use").validate({
      rules: {
        usuario: {
          required: true,
          minlength: 6,
          maxlength: 15
        },
        nombre: {
          required: true,
          maxlength: 50
        },
        tele: {
          required: true,
          digits: true,
          minlength: 7,
          maxlength: 10
        },
        naci: {
          required: true,
          date: true
        },
        correo: {
          required: true,
          email: true
        },
        contraseña: {
          required: true,
          minlength: 8,
          maxlength: 20
        },
        reportes: {
          maxlength: 150
        },
        tipo: {
          required: true,
          maxlength: 30
        },
        dire: {
          required: true,
          maxlength: 200
        }
      },
      messages: {
        usuario: {
          required: "Ingresa un usuario",
          minlength: "El usuario debe tener al menos 6 caracteres",
          maxlength: "El usuario no puede superar los 15 caracteres"
        },
        nombre: {
          required: "Ingresa el nombre",
          maxlength: "El nombre no puede superar los 50 caracteres"
        },
        tele: {
          required: "Ingresa el teléfono",
          digits: "El teléfono debe contener solo números",
          minlength: "El teléfono debe tener al menos 7 dígitos",
          maxlength: "El teléfono no puede superar los 10 dígitos"
        },
        naci: {
          required: "Selecciona la fecha de nacimiento",
          date: "Ingresa una fecha válida"
        },
        correo: {
          required: "Ingresa el correo",
          email: "Ingresa un correo válido"
        },
        contraseña: {
          required: "Ingresa la contraseña",
          minlength: "La contraseña debe tener al menos 8 caracteres",
          maxlength: "La contraseña no puede superar los 20 caracteres"
        },
        reportes: {
          maxlength: "Los reportes no pueden superar los 150 caracteres"
        },
        tipo: {
          required: "Ingresa el tipo",
          maxlength: "El tipo no puede superar los 30 caracteres"
        },
        dire: {
          required: "Ingresa la dirección",
          maxlength: "La dirección no puede superar los 200 caracteres"
        }
      },
      errorElement: "div",
      errorPlacement: function(error, element) {
        error.css({
          color: "red",
          marginTop: "5px",
          fontSize: "0.9em"
        });
        error.insertAfter(element);
      }
    });
  });
</script>
</body>
</html>