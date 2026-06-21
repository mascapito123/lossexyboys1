<?php
$totalProductos = 1250;
$productosVendidos = 845;
$stockDisponible = 405;
$erroresSistema = 3;
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reportes del Stock</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f4f6f9;
    padding:30px;
}

.contenedor{
    max-width:1200px;
    margin:auto;
}

.titulo{
    font-size:32px;
    font-weight:bold;
    color:#1f2937;
    margin-bottom:10px;
}

.descripcion{
    font-size:16px;
    color:#6b7280;
    margin-bottom:30px;
}

.estadisticas{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
    margin-bottom:30px;
}

.card{
    background:#fff;
    width:270px;
    padding:25px;
    border-radius:15px;
    box-shadow:0px 4px 12px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    color:#6b7280;
    font-size:16px;
    margin-bottom:10px;
}

.card p{
    font-size:32px;
    font-weight:bold;
    color:#111827;
}

.grafica{
    background:#fff;
    padding:25px;
    border-radius:15px;
    box-shadow:0px 4px 12px rgba(0,0,0,0.08);
    margin-bottom:30px;
}

.grafica h2{
    margin-bottom:25px;
    color:#1f2937;
}

.barras{
    display:flex;
    align-items:flex-end;
    gap:25px;
    height:300px;
}

.barra{
    width:70px;
    background:linear-gradient(180deg,#4f46e5,#6366f1);
    border-radius:8px 8px 0 0;
    position:relative;
}

.barra span{
    position:absolute;
    bottom:-30px;
    width:100%;
    text-align:center;
    font-size:14px;
}

.b1{height:120px;}
.b2{height:180px;}
.b3{height:220px;}
.b4{height:260px;}
.b5{height:290px;}

.botones{
    display:flex;
    gap:15px;
}

.btn{
    text-decoration:none;
    padding:14px 24px;
    border-radius:10px;
    font-size:15px;
    font-weight:bold;
    transition:0.3s;
}

.btn-primary{
    background:#4f46e5;
    color:white;
}

.btn-primary:hover{
    background:#4338ca;
}

.btn-secondary{
    background:#10b981;
    color:white;
}

.btn-secondary:hover{
    background:#059669;
}

@media (max-width: 768px) {
    body{
        padding: 16px 10px;
    }

    .contenedor{
        margin: 0 auto;
        padding: 0;
    }

    .titulo{
        font-size: 28px;
        text-align: center;
    }

    .descripcion{
        font-size: 14px;
        text-align: center;
    }

    .estadisticas{
        flex-direction: column;
        gap: 16px;
    }

    .card{
        width: 100%;
        padding: 20px;
    }

    .grafica{
        padding: 20px;
    }

    .barras{
        gap: 16px;
        height: 220px;
    }

    .barra{
        width: 50px;
    }

    .barra span{
        font-size: 12px;
    }

    .botones{
        flex-direction: column;
        gap: 12px;
    }

    .btn{
        width: 100%;
        text-align: center;
    }
}
</style>

</head>
<body>
    <?php include 'encabezadoadmin.php'; 
    ?>

<div class="contenedor">

    <h1 class="titulo">📊 Reportes del Stock</h1>
    <p class="descripcion">
        Analiza las métricas de rendimiento globales, errores y estadísticas clave.
    </p>

    <div class="estadisticas">

        <div class="card">
            <h3>Total Productos</h3>
            <p><?php echo $totalProductos; ?></p>
        </div>

        <div class="card">
            <h3>Productos Vendidos</h3>
            <p><?php echo $productosVendidos; ?></p>
        </div>

        <div class="card">
            <h3>Stock Disponible</h3>
            <p><?php echo $stockDisponible; ?></p>
        </div>

        <div class="card">
            <h3>Errores del Sistema</h3>
            <p><?php echo $erroresSistema; ?></p>
        </div>

    </div>

    <div class="grafica">
        <h2>📈 Crecimiento del Inventario</h2>

        <div class="barras">
            <div class="barra b1"><span>Ene</span></div>
            <div class="barra b2"><span>Feb</span></div>
            <div class="barra b3"><span>Mar</span></div>
            <div class="barra b4"><span>Abr</span></div>
            <div class="barra b5"><span>May</span></div>
        </div>
    </div>

    <div class="botones">
        <a href="#" class="btn btn-primary">
            Ver gráficas de crecimiento
        </a>

        <a href="exportar.php" class="btn btn-secondary">
            Exportar datos del sistema
        </a>
    </div>

</div>
<?php
      include("../pie_pg.php");
    ?>
</body>
</html>