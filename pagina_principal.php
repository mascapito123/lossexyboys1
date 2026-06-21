<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Boomble</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    overflow-x:hidden;
    background:white;
}

.vid{
    position:relative;
    width:100%;
    height:100vh;
    overflow:hidden;
}

video{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:-2;
}

.fondo{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.55);
    z-index:-1;
}
header{
    width:100%;
    position:absolute;
    top:0;
    left:0;

    padding:25px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.empresa{
    color:white;
    font-size:28px;
}

nav a{
    color:white;
    text-decoration:none;
    margin-left:35px;
    font-size:18px;
    transition:0.3s;
}

nav a:hover{
    color:#5eff6ce5;
}
.contenido{
    width:100%;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.contenido h1{
    font-size:100px;
    letter-spacing:5px;
    margin-bottom:30px;
    text-shadow:0 0 15px rgba(0,0,0,0.7);
}

.botones{
    display:flex;
    gap:40px;
    flex-wrap:wrap;
}

.botones a{
    color:white;
    text-decoration:none;
    font-size:35px;
    font-weight:bold;
    border-bottom:3px solid white;
    transition:0.3s;
}

.botones a:hover{
    transform:scale(1.1);
    color:#5eff6ce5;
    border-color:#5eff6ce5;
}


.sections{
    display:grid;
    grid-template-columns:
    repeat(auto-fit, minmax(320px,1fr));
    gap:30px;
    max-width:1200px;
    margin:60px auto;
    padding:20px;
}

.mitch{
    background:#fafafa;

    border-radius:10px;

    padding:20px;

    text-align:center;

    box-shadow:0 4px 15px rgba(0,0,0,0.05);

    display:grid;
    gap:10px;

    overflow:hidden;
}

.mitch img{
    width:100%;
    height:400px;

    object-fit:cover;

    border-radius:8px;

    transition:0.3s;
}

.mitch img:hover{
    transform:scale(1.05);
}

.mitch h2{
    font-size:22px;
    font-weight:700;
}

.mitch a{
    display:inline-block;

    background:#111;
    color:#fff;

    padding:10px 18px;

    border-radius:5px;

    text-decoration:none;

    font-size:14px;

    transition:0.3s;
}

.mitch a:hover{
    background:#333;
}


.bombastic{
    background:#fafafa;

    border-radius:10px;

    padding:20px;

    text-align:center;

    box-shadow:0 4px 15px rgba(0,0,0,0.05);

    display:grid;
    gap:10px;

    overflow:hidden;
}

.bombastic img{
    width:100%;
    height:400px;

    object-fit:cover;

    border-radius:8px;

    transition:0.3s;
}

.bombastic img:hover{
    transform:scale(1.05);
}

.bombastic h2{
    font-size:22px;
    font-weight:700;
}

.bombastic a{
    display:inline-block;

    background:#111;
    color:#fff;

    padding:10px 18px;

    border-radius:5px;

    text-decoration:none;

    font-size:14px;

    transition:0.3s;
}

.bombastic a:hover{
    background:#333;
}

.reinaduende{
    background:#fafafa;
    border-radius:10px;
    padding:20px;
    text-align:center;
    box-shadow:0 4px 15px rgba(0,0,0,0.05);
    display:grid;
    gap:10px;
    overflow:hidden;
}

.reinaduende img{
    width:100%;
    height:400px;
    object-fit:cover;
    border-radius:8px;
    transition:0.3s;
}

.reinaduende img:hover{
    transform:scale(1.05);
}

.reinaduende h2{
    font-size:22px;
    font-weight:700;
}

.reinaduende a{
    display:inline-block;
    background:#111;
    color:#fff;
    padding:10px 18px;
    border-radius:5px;
    text-decoration:none;
    font-size:14px;
    transition:0.3s;
}

.reinaduende a:hover{
    background:#333;
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding: 15px 16px;
    }

    .empresa {
        font-size: 24px;
    }

    nav a {
        margin-left: 0;
        display: inline-block;
        margin: 8px 10px;
        font-size: 16px;
    }

    .contenido h1 {
        font-size: 48px;
        letter-spacing: 3px;
        margin-bottom: 20px;
    }

    .botones {
        gap: 16px;
        justify-content: center;
        padding: 0 10px;
    }

    .botones a {
        font-size: 20px;
        border-bottom-width: 2px;
    }

    .sections {
        grid-template-columns: 1fr;
        gap: 20px;
        margin: 30px 12px;
        padding: 0;
    }

    .mitch img,
    .bombastic img,
    .reinaduende img {
        height: 260px;
    }

    .mitch,
    .bombastic,
    .reinaduende {
        padding: 18px;
    }

    .mitch h2,
    .bombastic h2,
    .reinaduende h2 {
        font-size: 20px;
    }

    .mitch a,
    .bombastic a,
    .reinaduende a {
        font-size: 13px;
        padding: 10px 16px;
    }
}
</style>
</head>
<body>
<section class="vid">
    <video autoplay muted loop playsinline>
        <source src="Bomble.mp4" type="video/mp4">
        Tu navegador no soporta HTML5.
    </video>
    <div class="fondo"></div>
    <header>
        <div class="empresa">
            Code Craft
        </div>
        <nav>
    <a href="productos.php">PRODUCTOS</a>
    <a href="horarioatencion.php">HORARIO</a>
    <a href="quienes.php">QUIENES</a>
    <a href="telefonos.php">TELEFONOS</a>
    <a href="usuarios/registro.php">REGISTRARSE</a>
</nav>
    </header>
    <div class="contenido">
        <h1>BOOMBLE</h1>
       <div class="botones">
    <a href="productos.php">JUGOS</a>
    <a href="horarioatencion.php">HORARIO</a>
    <a href="quienes.php">QUIENES</a>
    <a href="telefonos.php">TELEFONOS</a>
    <a href="usuarios/registro.php">REGISTRO</a>
</div>
        </div>
    </div>
</section>
<section class="sections">
    <div class="reinaduende">
        <img src="https://img.magnific.com/vector-premium/ilustracion-cajero-uniforme-azul-ayudando-cortesmente-cliente_1263357-19417.jpg?semt=ais_hybrid&w=740&q=80" alt="vendedor">
        <h2>VENDEDOR</h2>
        <a href="vendedor/vendedor.php">VER MÁS</a>
    </div>
    <div class="reinaduende">
        <img src="https://cdn-icons-png.flaticon.com/512/42/42994.png" alt="Quiénes Somos">
        <h2>QUIENES SOMOS</h2>
        <a href="quienes.php">MÁS INFORMACIÓN</a>
    </div>
    <div class="reinaduende">
        <img src="https://png.pngtree.com/png-vector/20250608/ourmid/pngtree-refreshing-fruit-juices-in-glasses-with-splashes-png-image_16490798.png" alt="Productos Naturales">
        <h2>PRODUCTOS NATURALES</h2>
        <a href="productos.php">COMPRAR AHORA</a>
    </div>
</section>
    <?php
     include("pie_pg.php");
    ?>
</body>
</html>