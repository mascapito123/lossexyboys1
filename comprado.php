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
  .mensaje-exito {
  text-align: justify;
  font-size: 100px;
  font-weight: bold;
  padding: 2rem;
  margin: 2rem auto;
  max-width: 1200px;
  animation: colorChange 4s infinite;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

@keyframes colorChange {
  0% { color: #22c55e; }
  25% { color: #3b82f6; }
  50% { color: #ec4899; }
  75% { color: #eab308; }
  100% { color: #22c55e; }
}
.text{
   text-align: center;
  font-size: 90px;
  font-weight: bold;
  padding: 2rem;
  margin: 2rem auto;
  max-width: 1200px;
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
    <div class="mensaje-exito">¡Excelente compra! 🎉<br>Gracias por confiar en nosotros</div>
    <div class="text">ya esta en camino👌</div>
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>