<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="admin2";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }
    $sql= "SELECT * FROM produc";
    $query = $conn->query($sql);

?>
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
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: calc(100% + 8px);
  left: 0;
  background-color: #111;
  min-width: 160px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  z-index: 10;
  border-radius: 5px;
  white-space: nowrap;
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
  .modaluse {
    inset: 0;
    margin: auto;
    width: 400px;
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
  .edi {
    padding: 6px;
    background-color: green;
    color: white;
    text-align: center;
    border-radius: 5px;
    fornt-weight: bold;
  }
  .eli {
    padding: 6px;
    background-color: red;
    color: white;
    text-align: center;
    border-radius: 5px;
    fornt-weight: bold;
  }
  .pan, .char, .joqui, .bomm, .panoch {
    padding: 10px 20px;
    background-color: transparent;
    border: transparent;
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
  .use {
  background-color: white;
  max-width: 600px;
  margin: auto;
  padding: 20px;
  border-radius: 8px;
  }
  .use-label {
  display: block;
  margin-top: 15px;
  font-weight: bold;
  }
  .use-input {
  width: 99%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid black;
  border-radius: 4px;
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
  }
  .info{
    grid-area: n;
    display: flex;
    display:inline-block;
    justify-content: center;
    top: 200px;
    left: 200px;
  }

  .goldaabajo {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
  }
  footer h4 {
    color: #fff;
    margin-bottom: 10px;
  }
  footer ul {
    list-style: none;
  }
  footer li {
    margin-bottom: 8px;
    font-size: 14px;
  }
  footer a {
    color: #ccc;
    text-decoration: none;
  }
  footer a:hover {
    color: #fff;
  }
  .redes-musculoso a {
    margin-right: 10px;
    display: inline-block;
    font-size: 18px;
  }
  .subscribe {
    display: grid;
    gap: 10px;
  }
  .subscribe input {
    padding: 8px;
    border: none;
    border-radius: 4px;
    width: 80%;
  }
  .subscribe button {
    background: #3cff46;
    border: none;
    color: #fff;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
  }
  .subscribe button:hover {
    background: #3cffce;
  }
    </style>
</head>
<body>
    <header>
  <a href="pagina_principal.html">
  <img src="logo bomble.png" alt="Logo" class="logo" style="border-radius: 50%;">
  </a>
  <nav>
    <ul>
      <li><a href="productos.html">NUESTROS JUGOS</a></li>
      <li><a href="horarioatencion.html">PROGRAMAS</a></li>
      <li><a href="quienes.html">QUIENES SOMOS</a></li>
      <li><a href="telefonos .html">TELEFONOS</a></li>
      <li class="dropdown">
  <a href="#" class="dropbtn">MÁS</a>
  <div class="dropdown-content">
    <a href="ubicacion.html">Ubicación</a>
    <a href="registro.html">Registrarse</a>
    <a href="adminbueno.php">Panel de Administración</a>
  </div>
</li>
    </ul>
  </nav>
</header>
    <section class="cuadro">
        <div class="a"><img src="fer.png" alt="pep " class="isac" >
          <nav>
            <h1 class="d">VENDEDOR</h1>
          </nav>
          <nav class="info">
          
            <button class="bot" id="añadir">AÑADIR</button>
            <dialog id="modalAñadir" class="modaluse">
              <form action="insert_vendedor.php" method="post" class="use">
                  <label for="usuario" class="use-label">Usuario:</label>
                  <input type="text" class="use-input" id="usuario" name="usuario" required><br>

                  <label for="nombrepro" class="use-label">Nombre del producto:</label>
                  <input type="text" class="use-input" id="nombrepro" name="nombrepro" required><br>

                  <label for="cantidad" class="use-label">Cantidad:</label>
                  <input type="number" class="use-input" id="cantidad" name="cantidad" required><br>

                  <label for="procio" class="use-label">Precio:</label>
                  <input type="number" class="use-input" id="precio" name="precio" required><br>

                  <label for="tipo" class="use-label">Tipo:</label>
                  <input type="text" class="use-input" id="tipo" name="tipo" required><br>

                 <input type="submit" value="Registrar" class="bot">
    
              </form>
            </dialog>
          </nav>
        </div>
        <div class="b">
            <table>
                <tr>
                    <th>USUARIO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    <th>TIPO</th>
                </tr>
                <tbody>
                <?php $i = 0; while($row = mysqli_fetch_assoc($query)):?>
                  <tr>
                    <td><button class="pan btn-modal" data-index="<?php echo $i; ?>"><?php echo $row['usuario']; ?></button></td>
                    <td><?php echo $row['nombrepro']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['tipo']; ?></td>
                    <td>
                      <a class="edi" href="editar_admin.php?id=<?php echo $row['id']; ?>">EDITAR</a>
                      <a class="eli" href="eliminar_admin.php?id=<?php echo $row['id']; ?>">ELIMINAR</a>
                    </td>
                  </tr>
                  <dialog class="modal modaltodo" data-index="<?php echo $i; ?>">
                    <center><h2><?php echo $row['usuario']?></h2><br></center>
                    <p>Nombre:<?php echo $row['nombrepro']?></p>
                    <p>Telefono:<?php echo $row['cantidad']?></p>
                    <p>Fecha de nacimiento: <?php echo $row['precio']?></p>
                    <p>Correo: <?php echo $row['tipo']?></p>
                    <form  method='dialog'>
                      <center><button class='botoncito'>cerrar</button></center>
                    </form>
                  </dialog>
                <?php $i++; endwhile;?>
                </tbody>
            </table>
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
<script>
        var boton = document.querySelectorAll(".btn-modal");
        boton.forEach(function(button) {
            button.addEventListener("click", function() {
                var index = button.getAttribute("data-index");
                var modal = document.querySelector(".modaltodo[data-index='" + index + "']");
                if (modal) {
                    modal.showModal();
                }
            });
        });

        var aña = document.getElementById("añadir");
        var modalAñadir = document.getElementById("modalAñadir");
        aña.addEventListener("click", function() {
            modalAñadir.showModal();
        });
    </script>

</body>
</html>