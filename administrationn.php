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
    transition: transform 0.3s ease;
  }
  header img.logo:hover {
    transform: scale(1.1);
  }
  nav ul {
    display: grid;
    grid-auto-flow: column;
    justify-content: center;
    list-style: none;
    gap: 20px;
  }
  nav a {
    color: #fff;
    text-decoration: none;
  }
  nav a:hover {
    color: #5eff6ce5;
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
section.cuadro{
    width: 99%;
    margin: 10px;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 250px 500px;
    grid-template-areas:
      "a"
      "b";
      gap: 10px;
  }
    .a {
    grid-area: a;
    background: linear-gradient(#b6d7a8, rgb(70, 180, 166));
    border-radius: 6px;
    display: grid;
    grid-template-columns: 30% 70%;
    grid-template-rows: 100px 150px;
    grid-template-areas: 
    "i d"
    "i n";
  }
    .b {
    grid-area: b;
    background: linear-gradient(#b6d7a8, rgb(70, 180, 166));
    border-radius: 6px;
  }
  @media (max-width: 700px) {
    section.cuadro {
      grid-template-columns: 1fr;
      grid-template-areas:
        "a"
        "b";
    }
  }
  table{
    width: 100%;
    height: 100%;
    border: 1px solid #000;
  }
  th{
    border: 1px solid #000;
    background-color: #333;
    color: #fff;
    padding: 8px;
  }
  td{
    border: 1px solid #000;
    padding: 8px;
    text-align: center;
  }
  .modal {
    inset: 0;
    margin: auto;
    width: 300px;
    padding: 20px;
    border: none;
    border-radius: 10px;
  }
  .botoncito { 
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
  border-radius: 5px;
  cursor: pointer;
  margin: 20px ;

  }
  .pan, .char, .joqui, .bomm, .panoch {
    padding: 10px 20px;
    background-color: transparent;
    border:transparent

  }
    footer {
    background: #111;
    color: #ccc;
    padding: 40px 20px;
    margin-top: 40px;
  }
  .isac{
    border-radius: 50%;
    width: 250px;
    height: 250px;
    align-items: center;
  }
  .d{
    font-size: 100px;
    grid-area: d;
  }
  .bot{
    padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
  border-radius: 5px;
  cursor: pointer;
  margin: 40px ;
  font-size: 50px;
  transition: transform 1s, box-shadow 1s;
  transform: translateY(4px);
  box-shadow: 0 0 0 rgba(0,0,0,0);
  }
  .info{
    grid-area: n;
    display: flex;
    display:inline-block;
    justify-content: center;
    top: 200px;
    left: 200px;
  }
    </style>
</head>
<body>
    <header>
  <a href="pagina_principal.php">
  <img src="logo bomble.png" alt="Logo" class="logo" style="border-radius: 50%;">
  </a>
  <nav>
    <ul>
      <li><a href="productos.php">NUESTROS JUGOS</a></li>
      <li><a href="horarioatencion.php">PROGRAMAS</a></li>
      <li><a href="combos.php">COMBOS</a></li>
      <li><a href="quienes.php">QUIENES SOMOS</a></li>
      <li><a href="telefonos.php">TELEFONOS</a></li>
      <li class="dropdown">
  <a href="productos.php">MÁS</a>
  <div class="dropdown-content">
    <a href="ubicacion.php">Ubicación</a>
    <a href="registro.php">Registrarse</a>
  </div>
</li>
    </ul>
  </nav>
</header>
    <section class="cuadro">
        <div class="a"><img src="Isac.png" alt="pep " class="isac" >
          <nav>
            <h1 class="d">ADMINISTRADOR</h1>
          </nav>
          <nav class="info">
          
            <button class="bot">AÑADIR</button>
            <button class="bot">EDITAR</button>
            <button class="bot">ELIMINAR</button>
          </nav>
          
        </div>
        <div class="b">
            <table>
                <tr>
                    <th>USUARIO</th>
                    <th>CORREO</th>
                    <th>CONTRAÑESA</th>
                    <th>REPORTES</th>
                    <th>TIPO</th>
                </tr>
                <tr>
                    <td><button class="pan" id="pan">Pantera</button></td>
                    <td>isacCaste45@gmail.com</td>
                    <td>******</td>
                    <td>dejer ver</td>
                    <td>administrador</td>
                </tr>
                <tr>
                    <td><button class="char" id="char">C Char</button></td>
                    <td>leonelVilla34@gmail.com</td>
                    <td>******</td>
                    <td>cambiar botones</td>
                    <td>lider</td>
                </tr>
                <tr>
                    <td><button class="joqui" id="joqui">C joqui</button></td>
                    <td>Camargogarnica@gmail.com</td>
                    <td>******</td>
                    <td>cambiar productos</td>
                    <td>probador</td>
                </tr>
                <tr>
                    <td><button class="bomm" id="bomm">C Bomm</button></td>
                    <td>hazielduzan@gmail.com</td>
                    <td>******</td>
                    <td>hacer CRUD</td>
                    <td>Data base</td>
                </tr>
                <tr>
                    <td><button class="panoch" id="panoch">panoch</button></td>
                    <td>mateosalazar@gmail.com</td>
                    <td>******</td>
                    <td>Hacer Pagina</td>
                    <td>pagina</td>
                </tr>
            </table>
        </div>
        <dialog class="modal">
            <center><img src='isac.png' alt='isac' class='isac' style='border-radius: 50%; width: 150px; height: 150px;'><br></center>
            <center><h2>Pantera</h2><br></center>
            <p>Nombre: Isac Castellon</p>
            <p>Correo: isacCaste45@gmail.com</p>
            <form  method='dialog'>
                <center><button class='botoncito'>cerrar</button></center>
            </form>
        </dialog>
    </section>
    <?php
      include("pie_pg.php");
    ?>

    <script>
        var pan = document.getElementById("pan");
        var char = document.getElementById("char");
        var joqui = document.getElementById("joqui");
        var bomm = document.getElementById("bomm");
        var panoch = document.getElementById("panoch");

        var modal = document.querySelector(".modal");
        pan.addEventListener("click", function() {
            modal.innerHTML ="<center><img src='isac.png' alt='isac' class='isac' style='border-radius: 50%; width: 150px; height: 150px;'><br></center><center><h2>Pantera</h2><br></center><p>Nombre: Isac Castellon</p><p>Correo: isacCaste45@gmail.com</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        char.addEventListener("click", function() {
            modal.innerHTML = "<center><img src='leo.png' alt='isac' class='isac' style='border-radius: 50%; width: 150px; height: 150px;'><br></center><center><h2>C Char</h2><br></center><p>Nombre: Leonel Villarrouel</p><p>Correo: leonelVilla34@gmail.com</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        joqui.addEventListener("click", function() {
            modal.innerHTML = "<center><img src='fer.png' alt='joqui' class='isac' style='border-radius: 50%; width: 150px; height: 150px;'><br></center><center><h2>C joqui</h2><br></center><p>Nombre: Fernando Camargo</p><p>Correo: Camargogarnica@gmail.com</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        bomm.addEventListener("click", function() {
            modal.innerHTML = "<center><img src='malaga.png' alt='bomm' class='isac' style='border-radius: 50%; width: 150px; height: 150px;'><br></center><center><h2>C Bomm</h2><br></center><p>Nombre: Alexander MAlaga</p><p>Correo: hazielduzan@gmail.com</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        panoch.addEventListener("click", function() {
            modal.innerHTML = "<center><img src='mateo.png' alt='panoch' class='isac' style='border-radius: 50%; width: 150px; height: 150px;'><br></center><center><h2>panoch</h2><br></center><p>Nombre: Mateo Salazar</p><p>Correo: mateosalazar@gmail.com</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
    </script>
</body>
</html>