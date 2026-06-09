<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>telefonos</title>
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
  body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

.contact-container {
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
}
.contact-card {
  display: flex;
  align-items: center;
  background: white;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.contact-card:hover {
  transform: translateY(-5px);
}

.contact-image {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 20px;
  border: 3px solid #25D366;
}

.contact-info {
  flex: 1;
}

.contact-info p {
  margin: 5px 0;
  font-size: 1.1rem;
  color: #333;
}

.whatsapp-link {
  display: inline-flex;
  align-items: center;
  padding: 8px 16px;
  background: #25D366;
  color: white !important;
  border-radius: 25px;
  text-decoration: none;
  transition: background 0.3s ease;
}

.whatsapp-link:hover {
  background: #128C7E;
}

.whatsapp-link img {
  width: 24px;
  height: 24px;
  margin-right: 8px;
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

<div class="contact-container">
  <div class="contact-card">
    <img src="isac1.jpg" alt="Isac" class="contact-image">
    <div class="contact-info">
      <p><strong>Isac Castellon</strong></p>
      <a href="https://api.whatsapp.com/send?phone=59168552545&text=quiero%20saber%20que%20productos%20tienen" 
         class="whatsapp-link" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        Contactar por WhatsApp
      </a>
    </div>
  </div>

  <div class="contact-card">
    <img src="alex.jpg" alt="Alexander" class="contact-image">
    <div class="contact-info">
      <p><strong>Alexander Malaga</strong></p>
      <a href="https://api.whatsapp.com/send?phone=59162615517&text=quiero%20saber%20que%20productos%20tienen" 
         class="whatsapp-link" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        Contactar por WhatsApp
      </a>
    </div>
  </div>

  <div class="contact-card">
    <img src="leo.jpg" alt="Leonel" class="contact-image">
    <div class="contact-info">
      <p><strong>Leonel Villaroel</strong></p>
      <a href="https://api.whatsapp.com/send?phone=59162992656&text=quiero%20saber%20que%20productos%20tienen" 
         class="whatsapp-link" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        Contactar por WhatsApp
      </a>
    </div>
  </div>

  <div class="contact-card">
    <img src="fer.png" alt="Fernando" class="contact-image">
    <div class="contact-info">
      <p><strong>Fernando Camargo</strong></p>
      <a href="https://api.whatsapp.com/send?phone=59171409698&text=quiero%20saber%20que%20productos%20tienen" 
         class="whatsapp-link" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        Contactar por WhatsApp
      </a>
    </div>
  </div>

  <div class="contact-card">
    <img src="mateo.jpg" alt="Mateo" class="contact-image">
    <div class="contact-info">
      <p><strong>Mateo Salazar</strong></p>
      <a href="https://api.whatsapp.com/send?phone=59163875529&text=quiero%20saber%20que%20productos%20tienen" 
         class="whatsapp-link" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        Contactar por WhatsApp
      </a>
    </div>
  </div>
</div>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>