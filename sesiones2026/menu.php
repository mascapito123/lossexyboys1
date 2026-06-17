<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

.menu{
    background:#1e293b;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 8%;
}

.logo{
    color:white;
    font-size:1.5rem;
    font-weight:bold;
}

.nav-links{
    display:flex;
    list-style:none;
    gap:20px;
}

.nav-links a{
    text-decoration:none;
    color:white;
    padding:8px 12px;
    border-radius:5px;
    transition:0.3s;
}

.nav-links a:hover{
    background:#334155;
}

.btn-menu{
    display:none;
    background:none;
    border:none;
    color:white;
    font-size:2rem;
    cursor:pointer;
}

/* RESPONSIVE */
@media(max-width:768px){

    .btn-menu{
        display:block;
    }

    .nav-links{
        display:none;
        flex-direction:column;
        position:absolute;
        top:70px;
        left:0;
        width:100%;
        background:#1e293b;
        text-align:center;
        padding:20px 0;
    }

    .nav-links.active{
        display:flex;
    }

    .nav-links li{
        margin:10px 0;
    }
}
    </style>
</head>
<body>
   <nav class="menu">


    <button class="btn-menu" id="btnMenu">
        ☰
    </button>

    <ul class="nav-links" id="navLinks">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
</nav>
  <script>
 var btnMenu = document.getElementById("btnMenu");
var navLinks = document.getElementById("navLinks");

btnMenu.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});
    </script>
   
</body>
</html>