<?php
$jugo = $_GET['jugo'];
$precio = $_GET['precio'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
  max-width: 520px;
  box-shadow: 0 12px 30px rgba(2,6,23,0.6);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.08);
}

.form-box h1{
  text-align: center;
  font-size: 1.6rem;
  margin-bottom: 12px;
  letter-spacing: 1px;
  text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}
.form-grid{
  display: grid;
  gap: 12px;
  margin-top: 10px;
}
label{
  font-weight: 700;
  font-size: 0.95rem;
  text-shadow: 0 1px 2px rgba(0,0,0,0.25);
}
input[type="text"],
input[type="number"],
select{
  width: 100%;
  padding: 10px 12px;
  border-radius: 8px;
  border: none;
  outline: none;
  font-size: 1rem;
  box-sizing: border-box;
}

input[type="text"],
input[type="number"],
select{
  background: rgba(255,255,255,0.95);
  color: #063225;
}

.form-actions{
  display:flex;
  justify-content:center;
  margin-top: 8px;
}
input[type="submit"]{
  background: #064e3b;
  color: #fff;
  padding: 10px 18px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-weight: 700;
  letter-spacing: 0.5px;
  box-shadow: 0 6px 18px rgba(2,6,23,0.45);
}
input[type="submit"]:hover{
  background: #05392e;
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
      <li><a href="combos.php">COMBOS</a></li>
      <li><a href="quienes.php">QUIENES SOMOS</a></li>
      <li><a href="telefonos .php">TELEFONOS</a></li>
      <li class="dropdown">
  <a href="productos.php">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="registro.php">Registrarse</a>
    <a href="creacion.php">Creacion de vasos</a>
    <a href="creacionjugos.php">Creacion de jugos</a>
  </div>
</li>
    </ul>
  </nav>
</header>
    <main class="main">
      <div class="form-box">
        <h1>¿Quieres comprar?</h1>
        <form action="insert_produc.php" method="post" class="form-grid">
          <div>
            <label for="Precio">Precio</label>
            <input id="Precio" type="text" name="Precio" value="<?php echo $precio; ?>" readonly>
          </div>

          <div>
            <label for="producto">Producto</label>
            <input id="producto" type="text" name="producto" value="<?php echo $jugo; ?>" readonly>
          </div>
          <div>
            <label for="vasos">Vasos</label>
            <select id="vasos" name="vasos" required>
              <option value="tutuma">tutuma</option>
              <option value="bambu">bambu</option>
              <option value="vasos de vidrio">vasos de vidrio</option>
            </select>
          </div>

          <div>
            <label for="cantidad">Cantidad</label>
            <input id="cantidad" type="number" name="cantidad" min="1" max="10" required>
          </div>

          <div class="form-actions">
            <input type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </main>
    <?php
include("pie_pg.php");
?>
</body>
</html>