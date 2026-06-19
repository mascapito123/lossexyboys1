<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quiénes Somos? - Boomble</title>

```
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f8f8f8;
        color: #333;
    }

    .main-content{
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .title-section{
        text-align: center;
        margin-bottom: 50px;
    }

    .title-section h1{
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .title-section p{
        font-size: 1.3rem;
        text-align: justify;
        line-height: 1.8;
        color: #444;
        max-width: 1000px;
        margin: 0 auto;
    }

    .info-cards{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .carda,
    .cardb{
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: all .3s ease;
    }

    .carda{
        background: #ffffff;
    }

    .cardb{
        background: #ffffff;
    }

    .carda:hover,
    .cardb:hover{
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .carda h2,
    .cardb h2{
        font-size: 2rem;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .carda p,
    .cardb p{
        font-size: 1.1rem;
        line-height: 1.8;
        text-align: justify;
        color: #444;
    }

    @media (max-width: 768px){

        .title-section h1{
            font-size: 2.2rem;
        }

        .title-section p{
            font-size: 1rem;
            text-align: left;
        }

        .info-cards{
            grid-template-columns: 1fr;
        }

        .carda,
        .cardb{
            padding: 20px;
        }

        .carda h2,
        .cardb h2{
            font-size: 1.5rem;
        }

        .carda p,
        .cardb p{
            font-size: 1rem;
        }
    }
</style>


</head>

<body>

<?php include("encabezado.php"); 
?>

<div class="main-content">

```
<div class="title-section">
    <h1>¿Quiénes somos?</h1>

    <p>
        Somos Boomble, un emprendimiento vibrante y consciente, nacido de la pasión por la vida saludable y el profundo respeto por nuestro planeta.
        En Boomble, creemos que el bienestar personal no debe estar reñido con la sostenibilidad. Por eso, hemos fusionado lo mejor de la naturaleza:
        deliciosos jugos 100% naturales y una propuesta de valor única y ecológica que marca la diferencia.
    </p>
</div>

<div class="info-cards">

    <div class="carda">
        <h2>Nuestra misión</h2>

        <p>
            Refrescar y nutrir ofreciendo a nuestros clientes una experiencia de sabor inigualable con jugos preparados al momento,
            utilizando frutas y verduras frescas de la más alta calidad, impulsando hábitos de vida más saludables.
            <br><br>
            Liderar la sostenibilidad fomentando el consumo responsable mediante el uso exclusivo de vasos reutilizables de bambú y tutuma,
            eliminando el plástico de un solo uso y promoviendo la reutilización de materiales naturales y artesanales.
            Buscamos inspirar a más personas y empresas a adoptar prácticas ecológicas.
        </p>
    </div>

    <div class="cardb">
        <h2>Nuestra visión</h2>

        <p>
            Visualizamos a Boomble como la marca líder en la venta de jugos naturales, reconocida por su compromiso con la ecología
            y la innovación sostenible. Queremos convertirnos en un referente de cómo un negocio puede generar un impacto ambiental positivo,
            expandiendo nuestra propuesta de "Jugos en tu Vaso Natural" a más comunidades.
            <br><br>
            Aspiramos a demostrar que es posible construir una empresa rentable y responsable con el medio ambiente,
            revalorizando el bambú y la tutuma como alternativas duraderas y ecológicas frente al plástico.
        </p>
    </div>

</div>
```

</div>

<?php include("pie_pg.php"); ?>

</body>
</html>