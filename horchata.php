<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boomble-canva</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <style>
    .sections {
    display: grid;
    grid-temle-columns: 50% 50%; 
    grid-template-rows: 100%;
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
  .reinaduende a:hover {
    background: #333;
  }  
</style>
</head>
<body>
<?php
include ("encabezado.php");
?>
  <section class="sections">
  <div class="reinaduende">
    <img src="https://images.aws.nestle.recipes/original/8eaf50148ed521383df5d9793cba995f_whatsapp_image_2022-04-28_at_1.00.26_pm_(2).jpeg" alt="Programas Hábitos">
  </div>
   <h1>Jugo de horcata</h1>
    <h2>Descirpccion</h2>
    <p>
      Un 
   </p>
   <a href="comprar.php?jugo=horchata&precio=5">
   <button>Compra</button>
   </a>
   </section>
    <?php
     include("pie_pg.php");
    ?>