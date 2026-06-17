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
      border-radius: 50%;
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
    footer {
      background: #111;
      color: #ccc;
      padding: 40px 20px;
      margin-top: 60px;
    }
    .goldaabajo {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
    }
    footer h4 {
      color: #fff;
      margin-bottom: 10px;
    }
    footer ul {
      list-style: none;
    }
    footer li {
      margin-bottom: 8px;
      font-size: 14px;
    }
    footer a {
      color: #ccc;
      text-decoration: none;
    }
    footer a:hover {
      color: #fff;
    }
    .redes-musculoso a {
      margin-right: 10px;
      display: inline-block;
      font-size: 18px;
    }
    .subscribe {
      display: grid;
      gap: 10px;
    }
    .subscribe input {
      padding: 8px;
      border: none;
      border-radius: 4px;
      width: 80%;
    }
    .subscribe button {
      background: #3cff46;
      border: none;
      color: #fff;
      padding: 8px 15px;
      border-radius: 4px;
      cursor: pointer;
    }
    .subscribe button:hover {
      background: #3cffce;
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
  <header>
    <a href="pagina_principal.php">
      <img src="logo bomble.png" alt="Logo" class="logo">
    </a>
    <nav>
      <ul>
        <li><a href="productos.php">NUESTROS JUGOS</a></li>
        <li><a href="horarioatencion.php">PROGRAMAS</a></li>
        <li><a href="quienes.php">QUIENES SOMOS</a></li>
        <li><a href="telefonos.php">TELEFONOS</a></li>
   <li class="dropdown">
  <a href="#">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="registro.php">Registrarse</a>
    <a href="sexiboys.php">Usuarios</a>
    <a href="creacion.php">Creación de vasos</a>
    <a href="creacionjugos.php">Creación de jugos</a>
    <a href="adminbueno.php">Panel de Administración</a>
  </div>
</li>
      </ul>
    </nav>
  </header>

    
</section>
<h1>REGISTRATE EN BOOMBLE</h1>
<form action="sesiones2026/uno.php" method="post">
<label for="usuario">USUARIO:</label>
<input type="text" id="usuario" name="usuario" required>
<label for="pass">CONTRASEÑA:</label>
<input type="password" id="pass" name="pass" required>
<button type="submit">Enviar Pedido</button>
</form>



  <footer>
    <div class="goldaabajo">
      <div>
        <h4>NOSOTROS</h4>
        <ul>
          <li><a href="#">Nuestra historia</a></li>
          <li><a href="#">Nuestra filosofía</a></li>
          <li><a href="#">Responsabilidad social</a></li>
        </ul>
      </div>
      <div>
        <h4>TIENDA</h4>
        <ul>
          <li><a href="#">Programa 7 días</a></li>
          <li><a href="#">Dieta líquida de 1 día</a></li>
          <li><a href="#">Otros productos</a></li>
        </ul>
      </div>
      <div>
        <h4>AYUDA</h4>
        <ul>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">Preguntas frecuentes</a></li>
          <li><a href="#">Términos y condiciones</a></li>
        </ul>
      </div>
      <div class="subscribe">
        <h4>SUSCRÍBETE</h4>
        <p>Recibe nuestras últimas noticias</p>
        <input type="email" placeholder="Tu email...">
        <button>OK</button>
        <div class="redes-musculoso">
          <a href="#">🌐</a>
          <a href="#">📘</a>  
          <a href="#">📸</a>
          <a href="#">📍</a>  
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
