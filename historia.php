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

    body {
      background: linear-gradient(180deg, #f4f7fb 0%, #ffffff 100%);
      color: #2b2b2b;
    }

    .titulo {
      width: 100%;
      background: #111;
      color: #fff;
      text-align: center;
      font-size: 42px;
      padding: 24px 0;
      margin-top: 20px;
      letter-spacing: 1px;
      box-shadow: 0 8px 18px rgba(0,0,0,0.18);
      animation: fadeInDown 1s ease;
    }

    .contenido {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      max-width: 1100px;
      margin: 60px auto;
      gap: 32px;
      animation: fadeInUp 1s ease;
    }

    .contenido.reverse {
      flex-direction: row-reverse;
    }

    .contenido img {
      width: 360px;
      height: auto;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
      display: block;
      transition: transform 0.4s ease;
    }

    .contenido img:hover {
      transform: scale(1.03);
    }

    .letra {
      flex: 1;
      min-width: 320px;
      line-height: 1.8;
      font-size: 18px;
      color: #333;
      text-align: justify;
      background: rgba(255,255,255,0.9);
      padding: 24px;
      border-radius: 16px;
      box-shadow: 0 10px 24px rgba(0,0,0,0.08);
      border: 1px solid rgba(0,0,0,0.04);
    }

    .letra h2 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
      color: #111;
    }

    .letra p {
      font-size: 18px;
      line-height: 1.8;
      text-align: justify;
      color: #444;
      font-family: "Times New Roman", Times, serif;
      margin-bottom: 16px;
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-18px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(18px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 900px) {
      .titulo {
        font-size: 34px;
        padding: 20px 0;
      }

      .contenido {
        margin: 40px auto;
        gap: 24px;
      }

      .contenido img {
        width: 100%;
        max-width: 500px;
      }

      .letra {
        min-width: 100%;
        padding: 20px;
      }
    }

    @media (max-width: 600px) {
      .titulo {
        font-size: 28px;
        padding: 16px 0;
        letter-spacing: 0.5px;
      }

      .contenido {
        gap: 18px;
        margin: 24px auto;
      }

      .contenido img {
        height: auto;
      }

      .letra {
        padding: 16px;
        font-size: 16px;
      }

      .letra p {
        font-size: 16px;
        line-height: 1.7;
      }
    }
  </style>
</head>
<body>
<?php
include ("encabezado.php");
?>

  <div class="titulo">Historia de Boomble</div>

<section class="contenido">
  <img src="imagenes/historia.png" alt="Preparación de jugos naturales">
  <div class="letra">
    <p>La historia de Boomble comenzó en la ciudad de Cochabamba, en las aulas del Colegio Pedro Poveda. Allí se conocieron dos jóvenes que, aunque provenían de lugares diferentes, compartían el mismo deseo de emprender y crear algo que dejara huella.
Edson era originario del Beni. Desde pequeño había crecido rodeado de una gran variedad de frutas tropicales y había aprendido a valorar la riqueza natural de su tierra. Cuando se mudó a Cochabamba para continuar sus estudios en el Colegio Pedro Poveda, tuvo que adaptarse a una nueva ciudad, nuevos compañeros y nuevas experiencias.
Fue en ese colegio donde conoció a Isac, un joven cochabambino muy sociable, creativo y siempre dispuesto a ayudar a los demás. Aunque al principio solo eran compañeros de clase, con el tiempo se hicieron grandes amigos gracias a los proyectos que realizaban juntos y a las largas conversaciones sobre sus metas para el futuro.
Durante una actividad escolar relacionada con el emprendimiento, ambos comenzaron a intercambiar ideas sobre posibles negocios. Edson hablaba con entusiasmo sobre las frutas del Beni y los sabores únicos que había disfrutado durante su infancia. Isac, por su parte, aportaba ideas sobre cómo presentar esos productos de una manera innovadora y atractiva para los consumidores.</p>
  </div>
</section>

<section class="contenido reverse">
  <img src="imagenes/refrescohisto.png" alt="Jugos frescos y naturales">
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
