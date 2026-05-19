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


footer{
    background:#111;
    color:#ccc;
    padding:40px 20px;
    margin-top:40px;
}


.goldaabajo{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:
    repeat(auto-fit, minmax(220px,1fr));
    gap:20px;
}


footer h4{
    color:#fff;
    margin-bottom:10px;
}


footer ul{
    list-style:none;
}

footer li{
    margin-bottom:8px;
    font-size:14px;
}


footer a{
    color:#ccc;
    text-decoration:none;
}

footer a:hover{
    color:#fff;
}


.redes-musculoso a{
    margin-right:10px;
    display:inline-block;
    font-size:18px;
}

.subscribe{
    display:grid;
    gap:10px;
}

.subscribe input{
    padding:8px;

    border:none;

    border-radius:4px;

    width:80%;
}

.subscribe button{
    background:#3cff46;

    border:none;

    color:white;

    padding:8px 15px;

    border-radius:4px;

    cursor:pointer;

    transition:0.3s;
}

.subscribe button:hover{
    background:#3cffce;
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
        <a href="telefonos .php">TELEFONOS</a>
            <section class="dropdown">
                <a href="#">MAS</a>
                <div class="dropdown-content">
                    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
                    <a href="registro.php">Registrarse</a>
                    <a href="creacion.php">Creacion de vasos</a>
                    <a href="creacionjugos.php">Creacion de jugos</a>
                </div>

            </section>
        </nav>
    </header>
    <div class="contenido">
        <h1>BOOMBLE</h1>
        <div class="botones">
            <a href="productos.php">JUGOS</a>
            <a href="horarioatencion.php">HORARIA</a>
            <a href="quienes.php">QUIENES</a>
            <a href="telefonos .php">TELEFONOS</a>
            <section class="dropdown">
                <a href="#">MAS</a>
                <div class="dropdown-content">
                    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
                    <a href="registro.php">Registrarse</a>
                    <a href="creacion.php">Creacion de vasos</a>
                    <a href="creacionjugos.php">Creacion de jugos</a>
                </div>
        </div>
    </div>
</section>
<section class="sections">
    <div class="mitch">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyTw9oCPkdU5cnUBa7Vurj3sFDKWccqHJRBQ&s" alt="Combos">

    <div class="reinaduende">
        <img src="combos.jpg" alt="Combos">
        <h2>COMBOS</h2>
        <a href="combos.php">COMPRA AHORA</a>
    </div>
    <div class="bombastic">
        <img src="https://cdn-icons-png.flaticon.com/512/42/42994.png" alt="Quiénes Somos">
    <div class="reinaduende">
        <img src="quienes.png" alt="Quiénes Somos">
        <h2>QUIENES SOMOS</h2>
        <a href="quienes.php">MÁS INFORMACIÓN</a>
    </div>
    <div class="reinaduende">
        <img src="https://png.pngtree.com/png-vector/20250608/ourmid/pngtree-refreshing-fruit-juices-in-glasses-with-splashes-png-image_16490798.png" alt="Productos Naturales">
        <h2>PRODUCTOS NATURALES</h2>
        <a href="productos.php">COMPRAR AHORA</a>
    </div>
</section>
<footer>
    <div class="goldaabajo">
        <div>
            <h4>NOSOTROS</h4>
            <ul>
                <li><a href="#">Nuestra historia</a></li>
                <li><a href="#">Nuestra filosofía</a></li>
                <li><a href="#">Responsabilidad social</a></li>
            </ul>
        </div>
        <div>
            <h4>TIENDA</h4>
            <ul>
                <li><a href="#">Programa 7 días</a></li>
                <li><a href="#">Dieta líquida de 1 día</a></li>
                <li><a href="#">Otros productos</a></li>
            </ul>
        </div>
        <div>
            <h4>AYUDA</h4>
            <ul>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Términos y condiciones</a></li>
            </ul>
        </div>
        <div class="subscribe">
            <h4>SUSCRÍBETE</h4>
            <p>Recibe nuestras últimas noticias</p>
            <input type="email" placeholder="Tu email...">
            <button>OK</button>
            <div class="redes-musculoso">
                <a href="#">🌐</a>
                <a href="#">📘</a>
                <a href="#">📸</a>
                <a href="#">📍</a>
            </div>
        </div>
    </div>

</footer>

</body>
</html>