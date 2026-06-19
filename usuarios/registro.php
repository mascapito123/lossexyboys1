<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrate en Boomble</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
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
<<<<<<< Updated upstream
include ("encabezadousua.php");
?>
=======
    include ("encabezadousua.php")
    ?>
>>>>>>> Stashed changes
</section>
<h1>REGISTRATE EN BOOMBLE</h1>
<form action="create_registro.php" method="post" class="registr">
<label for="nombre">NOMBRE COMPLETO:</label>
<input type="text" placeholder="pepe torrico" id="nombre" name="nombre">

<label for="usuario">USUARIO:</label>
<input type="text" placeholder="pepe torrico" id="usuario" name="usuario">

<label for="CI">CARNET DE IDENTIDAD(CI):</label>
<input type="number" id="CI" name="CI" >

<label for="pass">Contraseña:</label>
<input type="password" placeholder="pepe torrico" id="pass" name="pass">

<label for="telefono">Telefono</label>
<input type="number" placeholder="12345678" id="telefono" name="telefono">

<label for="estado">ESTADO:</label>
<input type="text" placeholder="12345678" id="estado" name="estado">

<label for="rol">ROL:</label>
<input type="number" placeholder="12345678" id="rol" name="rol">

<label for="direccion">DIRECCION:</label>
<textarea id="direccion" placeholder="Av.oquendo y calama" name="direccion" rows="3" ></textarea>

<label for="comentarios">COMENTARIOS ADICIONALES:</label>
<textarea id="comentarios" name="comentarios" rows="3" placeholder="que buena pagina :)"></textarea>

<button type="submit">Enviar Pedido</button>
<p>
    ¿Ya tienes cuenta?
    <a href="iniciar_sesion.php">Inicia sesión aquí</a>
</p>
</form>
         <script>
            $(document).ready(function(){
              $("form").validate({
                rules:{
                  nombre:{
                    required: true,
                    maxlegth: 15
                  },
                    usuario:{
                    requierd: true,
                    minlegnth: 6,
                    maxlegnth: 15
                  },
                  pass:{
                    required: true,
                    maxlenht: 10,
                    minlenght: 5
                  },
                  telefono:{
                    required: true,
                    maxlegnth: 8,
                    minlegnth: 8
                  },
                  estado:{
                    requiered: true
                  },
                  rol:{
                    required: true
                  },
                  CI:{
                    required: true,
                    maxlenth: 8,
                    minlenght: 7
                  },
                  comentarios:{
                    maxlength: 200
                  },
                  direccion:{
                    required: true,
                    maxlength: 200
                  }
                },
                messages: {
                  usuario: {
                    required: "Ingreser un nombre de ususario apropiado",
                    minlength: "Su usuario no bebe ser mayor de 6 caracteras",
                    maxlength: "Su usuario no puede sobrepasar los 15 caracteres"
                  },
                  nombre: {
                    required: "Ingresa tu nombre completo",
                    maxlength: "Su nombre no puede sobrepasar los 15 caracteers"
                  },
                  pass: {
                    required: "Por favor, ingresa una contraseña",
                    maxlength: "La contraseña solo debe ser de 10 caracteres",
                    minlength: "La contraseña bebe ser de al menos unos 5 ccaracters"
                  },
                  telefono: {
                    required: "Ingresa tu numero telefonico",
                    maxlength: "Ingresa tu numero de telefono verdadero",
                    minlength: "El numero de telefono tiene que ser real"
                  },
                  CI: {
                    required: "Ingresa tu carnet de identidad",
                    maxlength: "Ingresa tu carnet de identidad veradadero",
                    minlength: "Ingresa tu carnet de identidad veradadero"
                  },
                  estado: {
                    required: "Ingresa tu estado actual"
                  },
                  rol: {
                    required: "Ingresa tu rol en la empresa"
                  },
                  comentarios: {
                    maxlength: "Los comentarios dirirgidos a la empresas no bebe sobrepasar los 200 caracters"
                  },
                  direccion: {
                    required: "Ingrese la direccion de su domicilio",
                    maxlength: "Verificar que la direeccion sea verdadera"
                  }
                }
              });
            });
          </script>

</form>
    <?php
     include("../pie_pg.php");
    ?>
</body>
</html>
