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

  <div class="titulo">Historia de Boomble</div>

<section class="contenido">
  <img src="jugos1.jpg" alt="Preparación de jugos naturales">
  <div class="letra">
    <p>La historia de Boomble comenzó en la ciudad de Cochabamba, en las aulas del Colegio Pedro Poveda. Allí se conocieron dos jóvenes que, aunque provenían de lugares diferentes, compartían el mismo deseo de emprender y crear algo que dejara huella.
Edson era originario del Beni. Desde pequeño había crecido rodeado de una gran variedad de frutas tropicales y había aprendido a valorar la riqueza natural de su tierra. Cuando se mudó a Cochabamba para continuar sus estudios en el Colegio Pedro Poveda, tuvo que adaptarse a una nueva ciudad, nuevos compañeros y nuevas experiencias.
Fue en ese colegio donde conoció a Isac, un joven cochabambino muy sociable, creativo y siempre dispuesto a ayudar a los demás. Aunque al principio solo eran compañeros de clase, con el tiempo se hicieron grandes amigos gracias a los proyectos que realizaban juntos y a las largas conversaciones sobre sus metas para el futuro.
Durante una actividad escolar relacionada con el emprendimiento, ambos comenzaron a intercambiar ideas sobre posibles negocios. Edson hablaba con entusiasmo sobre las frutas del Beni y los sabores únicos que había disfrutado durante su infancia. Isac, por su parte, aportaba ideas sobre cómo presentar esos productos de una manera innovadora y atractiva para los consumidores.</p>
  </div>
</section>

<section class="contenido reverse">
  <img src="jugos2.jpg" alt="Jugos frescos y naturales">
  <div class="letra">
    <p>Después de muchas conversaciones, nació una idea que les pareció perfecta: crear una empresa dedicada a la elaboración de jugos naturales que combinaran la riqueza de las frutas benianas con una visión moderna y sostenible.
Comenzaron investigando recetas, probando mezclas de frutas y aprendiendo sobre nutrición y cuidado ambiental. Querían que sus productos fueran saludables, deliciosos y respetuosos con la naturaleza. Por eso decidieron utilizar recipientes reutilizables de bambú y tutuma, promoviendo hábitos de consumo responsables.
Aquel proyecto que empezó como una tarea escolar fue creciendo poco a poco hasta convertirse en Boomble, una marca inspirada en la amistad, la creatividad y el amor por la naturaleza. Edson aportó el conocimiento y la inspiración de las frutas del Beni, mientras que Isac contribuyó con su visión emprendedora y su capacidad para convertir las ideas en realidad.
Hoy, Boomble representa mucho más que una empresa de jugos. Es el resultado de la unión de dos amigos que se conocieron en el Colegio Pedro Poveda y que demostraron que las mejores ideas pueden surgir cuando personas con diferentes orígenes trabajan juntas por un mismo sueño.</p>
  </div>
</section>
</section>
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>
