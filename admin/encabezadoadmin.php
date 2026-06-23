<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  html, body {
    margin: 0;
    padding: 0;
  }
  /* Reserve space so page content doesn't sit under the fixed header */
  body {
    padding-top: calc(100px + 24px);
  }
  header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-sizing: border-box;
    z-index: 9999;
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

@media (max-width: 768px) {
  /* Ajuste para móviles: reserva espacio según el alto del header móvil */
  body {
    padding-top: calc(80px + 40px);
  }
  header {
    grid-template-columns: 1fr;
    justify-items: center;
    text-align: center;
    padding: 20px;
  }

  header img.logo {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
  }

  nav ul {
    grid-auto-flow: row;
    gap: 20px;
    justify-content: center;
    padding: 0;
  }

  .dropdown-content {
    left: 50%;
    transform: translateX(-50%);
  }
}
  </style>
<body>
  <header>
    <a href="../pagina_principal.php">
      <img src="../imagenes/logo bomble.png" alt="Logo" class="logo" style="border-radius: 50%;">
    </a>
    <nav>
      <ul>
        <li><a href="../productos.php">NUESTROS JUGOS</a></li>
        <li><a href="../horarioatencion.php">PROGRAMAS</a></li>
        <li><a href="../quienes.php">QUIENES SOMOS</a></li>
        <li><a href="../telefonos .php">TELEFONOS</a></li>
   <li class="dropdown">
  <a href="#">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="../usuarios/registro.php">Registrarse</a>
    <a href="../creacion.php">Creación de vasos</a>
    <a href="../historia.php">Creación de jugos</a>
    <a href="adminbueno.php">Panel de Administración</a>
  </div>
</li>
      </ul>
    </nav>
  </header>
</body>
</html>