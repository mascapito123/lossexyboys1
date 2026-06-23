<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boomble-canva</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body {
            font-family: 'Poppins', sans-serif;
            color: #111;
            background: #f5f7f6;
    }
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
<<<<<<< HEAD
  
  .reinaduende {
    background: #fafafa;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
=======
  header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
>>>>>>> d72241f77988b2f2ee6c7a164b7ade0d1151c752
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
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 18px 40px rgba(0,0,0,0.09);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .reinaduende:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 50px rgba(0,0,0,0.14);
  }
  .image-wrapper {
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid rgba(0,0,0,0.08);
  }
  .image-wrapper img {
    width: 100%;
    height: 380px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
  }
  .reinaduende:hover .image-wrapper img {
    transform: scale(1.08);
  }
  .decri {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(4,33,19,0.18) 0%, rgba(4,33,19,0.75) 100%);
    opacity: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 20px;
    gap: 12px;
    transition: opacity 0.3s ease;
  }
  .reinaduende:hover .decri {
    opacity: 1;
  }
  .decri p {
    color: #f5f7f6;
    font-size: 0.96rem;
    line-height: 1.6;
    margin: 0;
    text-shadow: 0 2px 10px rgba(0,0,0,0.35);
  }
  .add-btn {
    align-self: flex-start;
    background: #10b981;
    color: #fff;
    padding: 12px 22px;
    border-radius: 999px;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 0.02em;
    transition: transform 0.2s ease, background 0.2s ease;
  }
  .add-btn:hover {
    background: #059669;
    transform: translateY(-2px);
  }
  .reinaduende h2 {
    font-size: 24px;
    font-weight: 700;
    margin: 20px 0 10px;
    color: #064e3b;
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

<<<<<<< HEAD
    } 

  .sections{ 
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}


  @media (max-width: 768px) {

  .sections {
    grid-template-columns: 1fr;
    gap: 20px;
    padding: 15px;
  }

  .reinaduende {
    padding: 15px;
  }

  .reinaduende img {
    height: 250px;
  }

  .reinaduende h2 {
    font-size: 18px;
  }

  .promotion-link {
    width: 95%;
    height: auto;
    font-size: 35px;
    padding: 15px;
  }

  body {
    overflow-x: hidden;
  }
}
=======
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

  @media (max-width: 768px) {
    body {
      background: #f5f7f6;
    }

    header {
      padding: 12px 16px;
      grid-template-columns: 1fr;
      text-align: center;
    }

    header img.logo {
      width: 80px;
      height: 80px;
      margin: 0 auto;
    }

    nav ul {
      grid-auto-flow: row;
      gap: 12px;
      justify-content: center;
      padding: 0;
    }

    .sections {
      grid-template-columns: 1fr;
      gap: 20px;
      margin: 20px 10px;
    }

    .reinaduende {
      border-radius: 16px;
      margin: 0 auto;
      max-width: 100%;
    }

    .image-wrapper img {
      height: 260px;
    }

    .reinaduende h2 {
      font-size: 20px;
      margin: 14px 20px 20px;
    }

    .decri {
      padding: 16px;
    }

    .decri p {
      font-size: 0.95rem;
    }

    .add-btn {
      padding: 10px 18px;
      font-size: 0.94rem;
    }

    .promotion-link {
      width: auto;
      height: auto;
      margin: 16px auto;
      font-size: 32px;
      padding: 20px;
    }

    footer {
      padding: 24px 16px;
    }

    .goldaabajo {
      grid-template-columns: 1fr;
    }

    .subscribe input {
      width: 100%;
    }
  }
>>>>>>> d72241f77988b2f2ee6c7a164b7ade0d1151c752
</style>
</head>
<body>

<?php
<<<<<<< HEAD
include ("encabezado_carry.php");
?>
=======
     include("encabezado_carry.php");
    ?>

>>>>>>> d72241f77988b2f2ee6c7a164b7ade0d1151c752
  <section class="sections">
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://images.aws.nestle.recipes/original/8eaf50148ed521383df5d9793cba995f_whatsapp_image_2022-04-28_at_1.00.26_pm_(2).jpeg" alt="Jugo de Horchata">
      <div class="decri">
        <p>Horchata es refrescante y rica en antioxidantes, ideal para hidratarte y calmar la sed.</p>
        <a class="add-btn" href="comprar.php?jugo=horchata&precio=5">Añadir a carrito</a>
      </div>
    </div>
    <h2>Jugo de Horchata</h2>
  </div>
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://i.pinimg.com/1200x/c6/6d/a8/c66da8d73f7e6f1b8cffe9a1faf47a5e.jpg" alt="Limonada">
      <div class="decri">
        <p>Limonada natural ayuda a desintoxicar el cuerpo y aporta vitamina C para fortalecer defensas.</p>
        <a class="add-btn" href="comprar.php?jugo=limonada&precio=4">Añadir a carrito</a>
      </div>
    </div>
    <h2>Limonada</h2>
  </div>
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCZR99LVGfa08OLKxx2jbumqSjFOchJ61DnkAmMYHpNYrl1DB8" alt="Agua de Jamaica">
      <div class="decri">
        <p>Agua de Jamaica es refrescante y ayuda a reducir la inflamación con su aporte natural de antocianinas.</p>
        <a class="add-btn" href="comprar.php?jugo=agua_de_jamaica&precio=3">Añadir a carrito</a>
      </div>
    </div>
    <h2>Agua de Jamaica</h2>
  </div>
</section>

<section class="sections">
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTG1QLcdgKiPvjqqbh6LVIIHNIBkYaX-8t8RKoaJ0kr5BaY80ab" alt="Jugo de Sandía">
      <div class="decri">
        <p>El jugo de sandía es hidratante y rico en licopeno, ideal para cuidar la piel y el corazón.</p>
        <a class="add-btn" href="comprar.php?jugo=jugo_de_sandia&precio=6">Añadir a carrito</a>
      </div>
    </div>
    <h2>Jugo de Sandía</h2>
  </div>
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://www.clarin.com/2022/08/21/KfHICuhUX_2000x1500__1.jpg" alt="Jugo de Naranja">
      <div class="decri">
        <p>El jugo de naranja aporta vitamina C y ayuda a reforzar el sistema inmune con sabor fresco.</p>
        <a class="add-btn" href="comprar.php?jugo=jugo_de_naranja&precio=5">Añadir a carrito</a>
      </div>
    </div>
    <h2>Jugo de Naranja</h2>
  </div>
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://ilovemojitos.com/wp-content/uploads/2023/05/autres-cocktails-populaires.jpg" alt="Productos Naturales">
      <div class="decri">
        <p>El jugo de coco ayuda a mantener una buena hidratación gracias a sus electrolitos naturales.</p>
        <a class="add-btn" href="comprar.php?jugo=jugo_de_coco&precio=6">Añadir a carrito</a>
      </div>
    </div>
    <h2>Jugo de Coco</h2>
  </div>
</section>
<section class="sections">
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://www.recetas.com.bo/sites/default/files/2024-09/mocochinchi.jpg" alt="Mocochinchi">
      <div class="decri">
        <p>Mocochinchi es digestivo y reconfortante, ideal para recuperarte con una bebida tradicional.</p>
        <a class="add-btn" href="comprar.php?jugo=mocochinchi&precio=4">Añadir a carrito</a>
      </div>
    </div>
    <h2>Mocochinchi</h2>
  </div>
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://restobarprime.com/wp-content/uploads/2023/05/jugo-natural-mandarina.jpg" alt="Jugo de Mandarina">
      <div class="decri">
        <p>El jugo de mandarina es suave y rico en vitamina C, perfecto para un impulso de energía natural.</p>
        <a class="add-btn" href="comprar.php?jugo=jugo_de_mandarina&precio=5">Añadir a carrito</a>
      </div>
    </div>
    <h2>Jugo de Mandarina</h2>
  </div>
  <div class="reinaduende">
    <div class="image-wrapper">
      <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQIQKwWOMPXHb9IpF9eIjkphj0WI6EoFdoYT66DkngHAYWPM3I_" alt="Chicha Morada">
      <div class="decri">
        <p>Chicha morada es antioxidante y ayuda a regular la digestión con un sabor tradicional.</p>
        <a class="add-btn" href="comprar.php?jugo=chicha_morada&precio=4">Añadir a carrito</a>
      </div>
    </div>
    <h2>Chicha Morada</h2>
  </div>
</section>       
</body>
</html>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>
