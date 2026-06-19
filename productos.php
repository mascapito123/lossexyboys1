<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boomble-canva</title>
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
  header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
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
    .container {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            color: white;
            text-align: center;
    }
    .container2 {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            text-align: center;
            color: rgb(127, 255, 170);
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
    .sections {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 40px auto;
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
  .reinaduende a {
    display: inline-block;
    background: #111;
    color: #fff;
    padding: 10px 18px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
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
</style>
</head>
<body>

<?php
     include("encabezado_carry.php");
    ?>

  <section class="sections">
  <div class="reinaduende">
    <img src="https://images.aws.nestle.recipes/original/8eaf50148ed521383df5d9793cba995f_whatsapp_image_2022-04-28_at_1.00.26_pm_(2).jpeg" alt="Programas Hábitos">
    <h2>Jugo de Horchata</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
  <div class="reinaduende">
    <img src="https://i.pinimg.com/1200x/c6/6d/a8/c66da8d73f7e6f1b8cffe9a1faf47a5e.jpg" alt="Paquetes">
    <h2>Limonada</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
  <div class="reinaduende">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCZR99LVGfa08OLKxx2jbumqSjFOchJ61DnkAmMYHpNYrl1DB8" alt="Productos Naturales">
    <h2>Agua de jamaica</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
</section>

<section class="sections">
  <div class="reinaduende">
    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTG1QLcdgKiPvjqqbh6LVIIHNIBkYaX-8t8RKoaJ0kr5BaY80ab" alt="Programas Hábitos">
    <h2>Jugo de SANDIA</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
  <div class="reinaduende">
    <img src="https://www.clarin.com/2022/08/21/KfHICuhUX_2000x1500__1.jpg" alt="Paquetes">
    <h2>Jugo de NARANJA</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
  <div class="reinaduende">
    <img src="https://ilovemojitos.com/wp-content/uploads/2023/05/autres-cocktails-populaires.jpg" alt="Productos Naturales">
    <h2>Jugo de COCO </h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
</section>
<section class="sections">
  <div class="reinaduende">
    <img src="https://www.recetas.com.bo/sites/default/files/2024-09/mocochinchi.jpg" alt="Programas Hábitos">
    <h2>Mocochinchi</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
  <div class="reinaduende">
    <img src="https://restobarprime.com/wp-content/uploads/2023/05/jugo-natural-mandarina.jpg" alt="Paquetes">
    <h2>Jugo de MANDARINA</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
  <div class="reinaduende">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQIQKwWOMPXHb9IpF9eIjkphj0WI6EoFdoYT66DkngHAYWPM3I_" alt="Productos Naturales">
    <h2>Chicha Morada</h2>
    <a href="vasos.php">COMPRAR AHORA</a>
  </div>
</section>       
</body>
</html>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>
