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
    gap: 70px;
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
include ("encabezado.php");
?>
  <section class="sections">
  <div class="reinaduende">
    <a href="comprar.php?jugo=horchata&precio=5"><img src="https://images.aws.nestle.recipes/original/8eaf50148ed521383df5d9793cba995f_whatsapp_image_2022-04-28_at_1.00.26_pm_(2).jpeg" alt="Programas Hábitos"></a>
    <h2>Jugo de Horchata</h2><br>
  </div>
</section>
    <?php
     include("pie_pg.php");
    ?>