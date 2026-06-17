<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fabricación de los vasos</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
     
    .titulo {
      width: 100vw;
      background: #111;
      color: #fff;
      text-align: center;
      font-size: 28px;
      padding: 20px 0;
      margin-top: 20px;
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
<?php
include ("encabezado.php");
?>

  <div class="titulo">FABRICACIÓN DE JUGOS</div>

<section class="contenido">
  <img src="jugos1.jpg" alt="Preparación de jugos naturales">
  <div class="letra">
    <p>La elaboración de nuestros jugos comienza con la selección de frutas frescas y naturales, cuidadosamente elegidas según su punto ideal de maduración. Cada fruta es lavada y desinfectada con productos ecológicos, asegurando mantener su sabor y propiedades intactas.</p>
    <p>Nos enfocamos en trabajar con productores locales para garantizar ingredientes de calidad y reducir el impacto ambiental. Las frutas son peladas y cortadas a mano, preservando sus nutrientes y evitando procesos industriales que alteren su esencia natural.</p>
    <p>El jugo se extrae mediante métodos caseros que conservan el sabor auténtico y la textura original de la fruta. No utilizamos conservantes, colorantes ni azúcares añadidos, solo la dulzura natural que cada fruta ofrece.</p>
    <p>Cada preparación se realiza al momento, en pequeñas cantidades, para garantizar frescura y pureza. El resultado es un jugo 100% natural, lleno de energía y vitalidad, ideal para disfrutar en cualquier momento del día.</p>
  </div>
</section>

<section class="contenido reverse">
  <img src="jugos2.jpg" alt="Jugos frescos y naturales">
  <div class="letra">
    <p>Después de la extracción, los jugos se filtran suavemente para conservar su textura ligera y agradable. Cada mezcla se prueba con cuidado para equilibrar la dulzura, la acidez y el aroma, logrando combinaciones refrescantes y únicas.</p>
    <p>Utilizamos envases ecológicos y reciclables, reafirmando nuestro compromiso con el medio ambiente. Nuestros jugos son elaborados con dedicación, siguiendo un proceso artesanal que respeta los ciclos naturales de cada ingrediente.</p>
    <p>De esta manera, cada botella refleja nuestra filosofía: ofrecer un producto saludable, auténtico y lleno de vida, hecho con manos que valoran la naturaleza. Cada sorbo cuenta una historia de frescura, bienestar y sostenibilidad.</p>
    <p>Porque en cada jugo que elaboramos, ponemos el mismo cariño y esmero que en casa, manteniendo viva la tradición de lo natural, lo casero y lo verdaderamente saludable.</p>
  </div>
</section>
</section>
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>

