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