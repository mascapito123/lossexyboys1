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
    </style>
</head>
<body>
<<<<<<< HEAD
  <?php
include ("encabezado.php");
?>

=======
      <?php
include ("encabezado.php");
?>
>>>>>>> 9faa2606ff7fcc09d2056abf7beea390ccc3daec

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
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>