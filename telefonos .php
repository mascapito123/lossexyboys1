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
@media (max-width: 768px) {
  .contact-container {
    margin: 16px;
    padding: 12px;
  }

  .contact-card {
    flex-direction: column;
    align-items: center;
    padding: 16px;
    gap: 16px;
  }

  .contact-image {
    width: 90px;
    height: 90px;
    margin-right: 0;
  }

  .contact-info {
    text-align: center;
  }

  .contact-info p {
    font-size: 16px;
  }

  .whatsapp-link {
    width: 100%;
    justify-content: center;
    padding: 12px 16px;
    font-size: 16px;
  }

  .whatsapp-link img {
    width: 20px;
    height: 20px;
  }
}</style>
</head>
<body>
    <?php
      include ("encabezado.php");
    ?>

<div class="contact-container">
  <div class="contact-card">
    <img src="imagenes/isac.png" alt="Isac" class="contact-image">
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
    <img src="imagenes/malaga.png" alt="Alexander" class="contact-image">
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
    <img src="imagenes/leo.png" alt="Leonel" class="contact-image">
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
    <img src="imagenes/fer.png" alt="Fernando" class="contact-image">
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
    <img src="imagenes/mateo.png" alt="Mateo" class="contact-image">
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