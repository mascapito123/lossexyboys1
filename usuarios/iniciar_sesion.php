<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrate en Boomble</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
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

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    .contenido {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      max-width: 1100px;
      margin: 60px auto;
      gap: 40px;
    }

    .contenido.reverse {
      flex-direction: row-reverse;
    }

    .contenido img {
      width: 350px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      display: block;
    }

    .letra {
      flex: 1;
      min-width: 300px;
      line-height: 1.5;
      font-size: 17px;
      color: #333;
      text-align: justify;
    }

    .letra h2 {
      font-size: 26px;
      margin-bottom: 20px;
      text-align: center;
    }
    p{
      font-size: 30px;
      line-height: 1.8;
      text-align: justify;
      color: #444;
       font-family: "Times New Roman", Times, serif;
        font-size: 20px;
    }
    h1 {
color: #4CAF50;
text-align: center;
margin-top: 40px;
}
form {
background-color: white;
max-width: 600px;
margin: auto;
padding: 20px;
border-radius: 8px;
}
label {
display: block;
margin-top: 15px;
font-weight: bold;
}
input, select, textarea {
width: 99%;
padding: 10px;
margin-top: 5px;
border: 1px solid #ccc;
border-radius: 4px;
}
button {
background-color: #4CAF50;
color: white;
padding: 10px 20px;
border: none;
margin-top: 20px;
width: 100%;
font-size: 16px;
}

  </style>
  
</head>
<body>
    <?php
include ("encabezadousua.php");
?>
</section>
<h1>INICIAR SESIÓN</h1>

<form action="../sesiones2026/uno.php" method="post" class="registr">

    <label for="usuario">USUARIO:</label>
    <input type="text"
           id="usuario"
           name="usuario"
           placeholder="Ingresa tu usuario"
           required>

    <label for="pass">CONTRASEÑA:</label>
    <input type="password"
           id="pass"
           name="pass"
           placeholder="Ingresa tu contraseña"
           required>
    <button type="submit">Iniciar Sesión</button>
</form>
<script>
$(document).ready(function(){
  $(".registr").validate({
    rules:{
      usuario: {
        required: true,
        minlength: 4,
        maxlength: 15
      },
      pass: {
        required: true,
        minlength: 5,
        maxlength: 20
      }
    },
    messages:{
      usuario: {
        required: "Ingresa tu usuario",
        minlength: "El usuario debe tener al menos 4 caracteres",
        maxlength: "El usuario no puede sobrepasar los 15 caracteres"
      },
      pass: {
        required: "Ingresa tu contraseña",
        minlength: "La contraseña debe tener al menos 5 caracteres",
        maxlength: "La contraseña no puede superar los 20 caracteres"
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
    <?php
     include("../pie_pg.php");
    ?>
</body>
</html>
