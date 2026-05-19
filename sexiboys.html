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
body{
  font-family: Arial, sans-serif;
  margin: 0;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: #064e3b;
  color: #e6ffee;
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

footer {
    background: #111;
    color: #ccc;
    padding: 40px 20px;
    margin-top: 40px;
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
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #111;
    min-width: 160px;
    border-radius: 8px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.5);
    padding: 10px 0;
    z-index: 100;
}
.dropdown-content a {
    color: #fff;
    padding: 10px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #05a362;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown > a {
    cursor: pointer;
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
      <li><a href="combos.php">COMBOS</a></li>
      <li><a href="quienes.php">QUIENES SOMOS</a></li>
      <li><a href="telefonos.php">TELEFONOS</a></li>
     <li class="dropdown">
  <a href="#">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="registro.php">Registrarse</a>
    <a href="read_registro.php">Usuarios</a>
    <a href="creacion.php">Creación de vasos</a>
    <a href="creacionjugos.php">Creación de jugos</a>
  </div>
</li>

    </ul>
  </nav>
</header>

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
        echo "<a href='update_registro.php?CI=$CI'><button>Editar</button></a>";
        echo "<a href='delete_registro.php?CI=$CI'><button>Eliminar</button></a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "<p>No hay registros disponibles.</p>";
}
?>
</div>
</main>
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
