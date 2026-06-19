<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boomble-canva</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <style>
    body {
            font-family: Arial, sans-serif;
            color: #333;
    }
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  .reinaduende {
    background: #fafafa;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    display: grid;
    gap: 10px;
    overflow: hidden;
  }
  .reinaduende img {
    width: 100%;
    height: 500px;         
    object-fit: cover;    
    display: block;
    border-radius: 8px;    
    transition: transform 0.3s ease;
  }
  .reinaduende img:hover {
    transform: scale(1.05);
  }
  .reinaduende h2 {
    font-size: 22px;
    font-weight: 700;
  }
  .reinaduende a:hover {
    background: #333;
  }
    .promotion-link {
            padding: 5px;
            background-color: #b2ffb2;
            text-align: center;
            width: 1500px;
            height: 150px;
            margin: 20px auto;
            display: block;    
            max-width: 90%;
            font-size: 100px;

    }
    .isac{
      background-color: rgb(0, 128, 90);

    }    
</style>
</head>
<body>
<?php
include ("encabezado_carry.php");
?>
  <section class="sections">
  <div class="reinaduende">
    <a href="comprar.php?jugo=horchata&precio=5"><img src="https://images.aws.nestle.recipes/original/8eaf50148ed521383df5d9793cba995f_whatsapp_image_2022-04-28_at_1.00.26_pm_(2).jpeg" alt="Programas Hábitos"></a>
    <h2>Jugo de Horchata</h2><br>
  </div>
  <div class="reinaduende">
    <a href="comprar.php?jugo=limonada&precio=5"><img src="https://i.pinimg.com/1200x/c6/6d/a8/c66da8d73f7e6f1b8cffe9a1faf47a5e.jpg" alt="Paquetes"></a>
    <h2>Limonada</h2><br>
  </div>
  <div class="reinaduende">
    <a href="comprar.php?jugo=aguajamaica&precio=5"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCZR99LVGfa08OLKxx2jbumqSjFOchJ61DnkAmMYHpNYrl1DB8" alt="Productos Naturales"></a>
    <h2>Agua de jamaica</h2><br>
  </div>
</section>

<section class="sections">
  <div class="reinaduende">
    <a href="comprar.php?jugo=sandia&precio=5"><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTG1QLcdgKiPvjqqbh6LVIIHNIBkYaX-8t8RKoaJ0kr5BaY80ab" alt="Programas Hábitos"></a>
    <h2>Jugo de SANDIA</h2>
  </div>
  <div class="reinaduende">
    <a href="comprar.php?jugo=naranja&precio=5"><img src="https://www.clarin.com/2022/08/21/KfHICuhUX_2000x1500__1.jpg" alt="Paquetes"></a>
    <h2>Jugo de NARANJA</h2>
  </div>
  <div class="reinaduende">
    <a href="comprar.php?jugo=coco&precio=5"><img src="https://ilovemojitos.com/wp-content/uploads/2023/05/autres-cocktails-populaires.jpg" alt="Productos Naturales"></a>
    <h2>Jugo de COCO </h2>

  </div>
</section>
<section class="sections">
  <div class="reinaduende">
    <a href="comprar.php?jugo=mocochinchi&precio=5"><img src="https://www.recetas.com.bo/sites/default/files/2024-09/mocochinchi.jpg" alt="Programas Hábitos"></a>
    <h2>Mocochinchi</h2>

  </div>
  <div class="reinaduende">
    <a href="comprar.php?jugo=mandarina&precio=5"><img src="https://restobarprime.com/wp-content/uploads/2023/05/jugo-natural-mandarina.jpg" alt="Paquetes"></a>
    <h2>Jugo de MANDARINA</h2>

  </div>
  <div class="reinaduende">
    <a href="comprar.php?jugo=chichamorada&precio=5"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQIQKwWOMPXHb9IpF9eIjkphj0WI6EoFdoYT66DkngHAYWPM3I_" alt="Productos Naturales"></a>
    <h2>Chicha Morada</h2>
  </div>
</section>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>
