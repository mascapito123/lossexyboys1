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
.actions{
        display:flex;
        gap:20px;
        justify-content:center;
        align-items:center;
        margin: 2rem auto;
        max-width: 1200px;
        padding: 1rem;
      }
      .btn{
        padding: 12px 20px;
        font-size: 18px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: transform .6s ease, opacity .6s ease;
      }
      .seguir{
        padding: 20px 36px;
        font-size: 24px;
        background: #22c55e;
        color: #fff;
      }
      .salir{
        background: #ef4444;
        color: #fff;
      }
      .salir.animate{
        transform: translateX(150%);
        opacity: 0;
        pointer-events: none;
      }
    </style>
</head>
<body>
<?php
include ("encabezado.php");
?>
    <div class="mensaje-exito">¡Excelente compra! 🎉<br>Gracias por confiar en nosotros</div>
    <div class="actions">
      <button id="isac" class="btn salir">Salir de la página</button>
      <button id="seguir" class="btn seguir">Seguir comprando :)</button>
    </div>

    <script>
      document.getElementById('isac').addEventListener('click', function(){
        var btn = this;
        btn.classList.add('animate');
        btn.addEventListener('transitionend', function(){
          btn.style.display = 'none';
        }, { once: true });
      });

      document.getElementById('seguir').addEventListener('click', function(){
        window.location.href = 'productos.php';
      });
    </script>
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>