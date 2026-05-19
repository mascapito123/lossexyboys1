<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    gap: 20px;
  }
  nav a {
    color: #fff;
    text-decoration: none;
  }
  nav a:hover {
    color: #5eff6ce5;
  }
  .pepe {
    background: #f6f6f6;
    padding: 60px 20px;
    display: grid;
    justify-content: center;
  }
  .pepe-contenido {
    max-width: 1100px;
    display: grid;
    gap: 20px;
  }
  .pepe h1 {
    font-size: 46px;
    font-weight: 800;
  }
  .pepe h1 span {
    color: #111;
  }
  .pepep p {
    font-size: 22px;
    color: #555;
  }
  .pepe-img img {
    width: 1000px;
    height: 500px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }
  .pepe-img img:hover {
    transform: scale(1.03);
  }
.main-content {
  max-width: 1200px;
  margin: 40px auto;
  padding: 0 20px;
}

.vasos {
  max-width: 1200px;
  margin: 40px auto;
  padding: 20px;
}

.vasos h1 {
  text-align: center;
  font-size: 50px;
  margin-bottom: 30px;
  color: #333;
}

.vasos-item {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  align-items: center;
}

.vasos-item img {
  width: 500px;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.vasos-item p {
  font-size: 30px;
  line-height: 1.6;
  text-align: justify;
  color: #444;
  font-family: "Times New Roman", Times, serif;
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


<div class="vasos">
  <h1>La fabricación de los vasos</h1>
  <div class="vasos-content">
    <div class="vasos-item">
      <p>Se selecciona un bambú maduro, luego a la caña se le corta en secciones con una sierra, utilizando los nudos internos como la base natural del vaso, luego se lija o se usa una escofina para dejar el interior completamente hueco y liso. Se limpia el interior y el exterior de la caña. Se deja secar completamente para asegurar su durabilidad. Se lijan los bordes y la superficie (con lija fina) para que queden suaves al tacto.</p>
      <img src="lija.jpg" alt="lija">
    </div>
    
    <div class="vasos-item">
      <img src="sierra.jpg" alt="sierra">
      <p>Se corta la cáscara dura con una segueta, serrucho o cúter. Es crucial que el corte sea limpio y recto. Se extrae toda la pulpa y las semillas de la parte interna (la "carne") con una cuchara, espátula o herramienta similar. Se raspa cuidadosamente el interior hasta que quede completamente limpio, liso y blanco. Se lijan los bordes del corte para suavizarlos.</p>
    </div>
  </div>
</div>

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