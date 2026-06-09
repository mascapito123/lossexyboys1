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
    gap: 70px;
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

.title-section {
  text-align: center;
  margin-bottom: 40px;
}

.title-section h1 {
font-size: 3rem;
color: #333;
margin-bottom: 20px;
margin-bottom: 20px;
font-family: sans-serif;
}

.title-section p {
      font-size: 30px;
      text-align: justify;
      line-height: 1.6;
      color: #444;
      font-family: "Times New Roman", Times, serif;
}

.info-cards {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
  margin-top: 40px;
}

.card {
  background: #fff;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.card:hover {
  transform: scale(1.03);
  background: #f0fff4;
}

.card h2 {
      font-size: 2rem;
      color: #222;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
    }

.card p {
      font-size: 20px;
      line-height: 1.6;
      text-align: justify;
      color: #444;
      font-family: "Times New Roman", Times, serif;
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

<div class="main-content">
  <div class="title-section">
    <h1>¿Quiénes somos?</h1>
    <p>Somos Boomble, un emprendimiento vibrante y consciente, nacido de la pasión por la vida saludable y el profundo respeto por nuestro planeta. En Boomble, creemos que el bienestar personal no debe estar reñido con la sostenibilidad. Por eso, hemos fusionado lo mejor de la naturaleza: deliciosos jugos 100% naturales y una propuesta de valor única y ecológica que marca la diferencia.</p>
  </div>

  <div class="info-cards">
    <div class="card">
      <h2>Nuestra misión</h2>
      <p>Refrescar y Nutrir: Ofrecer a nuestros clientes una experiencia de sabor inigualable con jugos hechos al momento, utilizando frutas y verduras frescas de la más alta calidad, impulsando así hábitos de vida más saludables.
      <br>
      Liderar la Sostenibilidad: Fomentar el consumo responsable al servir nuestros jugos exclusivamente en vasos reutilizables de bambú y tutuma , eliminando el plástico de un solo uso y promoviendo la reutilización y el valor de los materiales naturales y artesanales. Buscamos ser un agente de cambio que inspire a otros a adoptar prácticas ecológicas.</p>
    </div>

    <div class="card">
      <h2>Nuestra visión</h2>
      <p>Visualizamos a Boomble como la marca líder en la venta de jugos naturales reconocida por su compromiso inquebrantable con la ecología y la innovación sostenible. Queremos ser el estándar de cómo un negocio de alimentos y bebidas puede operar con un impacto ambiental positivo, expandiendo nuestra propuesta de "Jugos en tu Vaso Natural" a más comunidades y demostrando que es posible tener un negocio rentable que sea amable con la Tierra. Buscamos revalorizar el bambú y la tutuma como alternativas cotidianas y duraderas al plástico.</p>
    </div>
  </div>
</div>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>