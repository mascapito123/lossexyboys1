<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Horario de Atención
Boomble</title>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
body {
font-family: Arial, sans-serif;
color: #6eb3f9ff;
margin: 0;
background-image: url(https://www.prensalibre.com/wp-content/uploads/2025/05/Jugos-naturales-01.jpg?quality=52);
background-size: cover;
background-position: center;
min-height: 100vh;
display: flex;
flex-direction: column;
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


h1 {
text-align: center;
color: #5eff6ce5;
}

table {
width: 100%;
margin-top: 20px;
}
.container {
max-width: 500px;
margin: 40px auto;
background-color: #ffffff;
padding: 30px;
border-radius: 10px;
flex: 1;

}
th, td {
padding: 12px;
text-align: left;
}

th {
background-color: #5eff6ce5;
color: rgb(255, 255, 255);
}

tr:nth-child(even) {
background-color: #c5fff5;
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
</style>
</head>
<body>
<header>
  <a href="pagina_principal.php">
  <img src="logo bomble.png" alt="Logo" class="logo" style="border-radius: 50%;">
  </a>
  <nav>
    <ul>
      <li><a href="productos.php">NUESTROS JUGOS</a></li>
      <li><a href="horarioatencion.php">PROGRAMAS</a></li>
      <li><a href="quienes.php">QUIENES SOMOS</a></li>
      <li><a href="telefonos .php">TELEFONOS</a></li>
      <li class="dropdown">
  <a href="productos.php">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="registro.php">Registrarse</a>
    <a href="creacion.php">Creacion de vasos</a>
    <a href="creacionjugos.php">Creacion de jugos</a>
    <a href="adminbueno.php">Panel de Administración</a>
  </div>
</li>
    </ul>
  </nav>
</header>

<section class="container">
<h1>Horario de Atención
Boomble</h1>
<table>
<thead>
<tr>
<th>Día</th>
<th>Horario</th>
</tr>
</thead>
<tbody>
<tr>
<td>Lunes</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Martes</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Miércoles</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Jueves</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Viernes</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Sábado</td>
<td>Cerrado</td>
</tr>
<tr>
<td>Domingo</td>
<td>Cerrado</td>
</tr>
</tbody>
</table>
</section>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>