<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="boomblez";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }

    $CI=$_GET['CI'];
    $sql="SELECT * FROM registro WHERE CI='$CI'";
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
</head>
<body>
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
    
    <?php
include ("encabezadousua.php");
?>
    <form action="editado_registro.php" method="post" class="use">
        <label for="CI">CI:</label>
        <input type="hidden" id="CI" name="CI" value="<?php echo $row['CI']; ?>" readonly><br>

        <label for="nombre">Nombre:</label>
        <input type="text" class="use-input" id="nombre" name="nombre" required value="<?php echo $row['nombre']; ?>"><br>

        <label for="tele" class="use-label">Teléfono:</label>
        <input type="text" class="use-input" id="tele" name="tele" required value="<?php echo $row['tele']; ?>"><br>

        <label for="email" class="use-label">Correo:</label>
        <input type="email" class="use-input" id="email" name="email" required value="<?php echo $row['email']; ?>"><br>

        <label for="direccion" class="use-label">Direccion:</label>
        <textarea class="use-input" id="direccion" name="direccion" required><?php echo $row['direccion']; ?></textarea><br>

        <label for="comentarios" class="use-label">Comentarios:</label>
        <input type="text" class="use-input" id="comentarios" name="comentarios" required value="<?php echo $row['comentarios']; ?>"><br>

        <input type="submit" value="Registrar" class="bot">
    </form>
    <?php
      include("../pie_pg.php");
    ?>
<script>
  $(document).ready(function(){
    $(".use").validate({
      rules: {
        nombre: {
          required: true,
          maxlength: 60
        },
        tele: {
          required: true,
          digits: true,
          minlength: 7,
          maxlength: 10
        },
        email: {
          required: true,
          email: true,
          maxlength: 80
        },
        direccion: {
          required: true,
          maxlength: 200
        },
        comentarios: {
          maxlength: 200
        }
      },
      messages: {
        nombre: {
          required: "Ingresa tu nombre",
          maxlength: "El nombre no puede superar los 60 caracteres"
        },
        tele: {
          required: "Ingresa tu teléfono",
          digits: "El teléfono solo puede contener números",
          minlength: "El teléfono debe tener al menos 7 dígitos",
          maxlength: "El teléfono no puede tener más de 10 dígitos"
        },
        email: {
          required: "Ingresa tu correo",
          email: "Ingresa un correo válido",
          maxlength: "El correo no puede superar los 80 caracteres"
        },
        direccion: {
          required: "Ingresa tu dirección",
          maxlength: "La dirección no puede superar los 200 caracteres"
        },
        comentarios: {
          maxlength: "Los comentarios no deben superar los 200 caracteres"
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