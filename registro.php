<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrate en Boomble</title>
  <style>
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
      include ("encabezado.php");
    ?>
</section>
<h1>REGISTRATE EN BOOMBLE</h1>
<form action="create_registro.php" method="post" class="registr">
<label for="nombre">NOMBRE COMPLETO:</label>
<input type="text" placeholder="pepe torrico" id="nombre" name="nombre" required>

<label for="telefono">TELEFONO</label>
<input type="number" placeholder="12345678" id="telefono" name="telefono" required>

<label for="email">CORREO ELECTRONICO:</label>
<input type="email" placeholder="pepe121@gmail.com" id="email" name="email" required>

<label for="direccion">DIRECCION:</label>
<textarea id="direccion" placeholder="Av.oquendo y calama" name="direccion" rows="3" required></textarea>

<label for="CI">CARNET DE IDENTIDAD(CI):</label>
<input type="number" id="CI" name="CI" required>

<label for="comentarios">COMENTARIOS ADICIONALES:</label>
<textarea id="comentarios" name="comentarios" rows="3" placeholder="que buena pagina :)"></textarea>

<button type="submit">Enviar Pedido</button>

<script>
$(document).ready(function(){
              $(".registr").validate({
                rulesa:{
                  nombre:{
                    requierd: true,
                    minlegnth: 10,
                    maxlegnth: 20
                  },
                  telefono:{
                    required: true,
                    maxlegth: 8
                  },
                  email:{
                    required: true,
                    maxength: 20,
                    minlength: 20
                  },
                  direccion:{
                    required: true,
                    maxlenght: 20,
                    minlenght: 10
                  },
                  CI:{
                    required: true,
                    maxlength:7 ,
                    minlenght:7 
                  },
                }
              })
            })
</script>

</form>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>
