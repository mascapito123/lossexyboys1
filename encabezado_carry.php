<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="carrito";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }
    $sql= "SELECT * FROM carro";
    $query = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
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
  nav {
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: center;
    gap: 30px;
  }
  nav ul {
    display: grid;
    grid-auto-flow: column;
    justify-content: center;
    list-style: none;
    gap: 70px;
    margin: 0;
    padding: 0;
  }
  nav a {
    color: #fff;
    text-decoration: none;
  }
  nav a:hover {
    color: #5eff6ce5;
  }
  #añadir {
    background: rgba(255,255,255,0.08);
    border: 2px solid rgba(255,255,255,0.35);
    color: #fff;
    font-size: 2.4rem;
    width: 64px;
    height: 64px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    cursor: pointer;
    transition: transform 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
  }
  #añadir:hover {
    background: rgba(94, 255, 108, 0.15);
    transform: translateY(-3px);
    box-shadow: 0 22px 48px rgba(0, 0, 0, 0.25);
  }
  #añadir:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(94, 255, 108, 0.35);
  }
  .container {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            color: white;
            text-align: center;
    }
    .container2 {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            text-align: center;
            color: rgb(127, 255, 170);
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
    .sections {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 40px auto;
  }
.modaluse{
    border: none;
    border-radius: 18px;
    padding: 0;
    width: 90%;
    max-width: 1200px;
    background: transparent;
}

.modaluse::backdrop{
background: rgba(0,0,0,0.7);
backdrop-filter: blur(4px);
}

.carrito{
background: #ffffff;
border-radius: 18px;
padding: 25px;
box-shadow: 0 15px 40px rgba(0,0,0,0.25);
overflow-x: auto;
}

.carrito::before{
content: "🛒 Mi Carrito";
display: block;
font-size: 1.8rem;
font-weight: bold;
color: #222;
margin-bottom: 20px;
}

.carrito table{
width: 100%;
border-collapse: collapse;
font-family: Arial, sans-serif;
}

.carrito th{
background: linear-gradient(135deg,#32c766,#1d9d4b);
color: white;
padding: 15px;
text-align: center;
font-size: 15px;
letter-spacing: 1px;
}

.carrito th:first-child{
border-radius: 10px 0 0 10px;
}

.carrito th:last-child{
border-radius: 0 10px 10px 0;
}

.carrito td{
padding: 15px;
text-align: center;
border-bottom: 1px solid #e5e5e5;
color: #444;
font-size: 15px;
}

.carrito tbody tr{
transition: 0.3s;
}

.carrito tbody tr:hover{
background: #f6fff8;
transform: scale(1.01);
}

.pan{
background: #32c766;
color: white;
border: none;
padding: 8px 14px;
border-radius: 8px;
cursor: pointer;
font-size: 14px;
transition: .3s;
}

.pan:hover {
  background: #2aa655;
  transform: scale(1.05);
}
.pagar{
background: #32c766;
color: white;
border: none;
padding: 8px 14px;
border-radius: 8px;
cursor: pointer;
font-size: 20px;
transition: .3s;
}

.pagar:hover {
  background: #2aa655;
  transform: scale(1.05);
}

.edi {
  display: inline-block;
  background: #3498db;
  color: white;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 8px;
  margin-right: 5px;
  transition: .3s;
}

.edi:hover {
  background: #2980b9;
  transform: scale(1.05);
}

.eli {
  display: inline-block;
  background: #e74c3c;
  color: white;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 8px;
  transition: .3s;
}

.eli:hover {
  background: #c0392b;
  transform: scale(1.05);
}

#cerrarCarrito {
  display: inline-block;
  background: #f39c12;
  color: white;
  border: none;
  padding: 10px 16px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  transition: .3s;
  margin-right: 5px;
}

#cerrarCarrito:hover {
  background: #e67e22;
  transform: scale(1.05);
  box-shadow: 0 4px 12px rgba(243, 156, 18, 0.3);
}

.sections {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    max-width: 1200px;
}

</style>
<body>
  <header>
  <a href="pagina_principal.php">
  <img src="imagenes/logo bomble.png" alt="Logo" class="logo" style="border-radius: 50%;">
  </a>
  <nav>
    <ul>
      <li><a href="productos.php">NUESTROS JUGOS</a></li>
      <li><a href="horarioatencion.php">PROGRAMAS</a></li>
      <li><a href="quienes.php">QUIENES SOMOS</a></li>
      <li><a href="telefonos .php">TELEFONOS</a></li>
      <li class="dropdown">
  <a href="productos.php">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="usuarios/registro.php">Registrarse</a>
    <a href="creacion.php">Creacion de vasos</a>
    <a href="creacionjugos.php">Creacion de jugos</a>
    <a href="admin/adminbueno.php">Panel de Administración</a>
  </div>
</li>
    </ul>
    <button id="añadir">🛒</button>
  </nav>
</header>



        <dialog id="modalAñadir" class="modaluse">
            <div class="carrito">
            <table>
                <tr>
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>ESTADO</th>
                    <th>PRDUCTO</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    <TH>VENDEDOR</TH>
                    <TH>FECHA</TH>
                    <th><button id="cerrarCarrito" class="cerrar">seguir comprando</button></th>
                </tr>
                <tbody>
                <?php $i = 0; $total = 0; while($row = mysqli_fetch_assoc($query)):?>
                  <tr>
                    <td><button class="pan btn-modal" data-index="<?php echo $i; ?>"><?php echo $row['codigo']; ?></button></td>
                    <TD><?php echo $row['nombre']; ?></TD>
                    <td><?php echo $row['estado']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['vendedor']; ?></td>
                    <td><?php echo $row['fecha_registro']; ?></td>
                    <td>
                      <a class="eli" href="carrito/eliminar_carrito.php?codigo=<?php echo $row['codigo']; ?>">ELIMINAR</a>
                    </td>
                </tr>
                
                <?php $i++; 
                $total += $row['precio'] * $row['cantidad'];
                endwhile;
                ?>
                </tbody>
                <tr>
                    <td colspan="8">Total: $<?php echo number_format($total, 2); ?></td>
                    <td><button class="pagar">PAGAR YA?</button></td>
                </tr>
            </table>
        </div>
        </dialog>


        <script>
            var aña = document.getElementById("añadir");
            var modalAñadir = document.getElementById("modalAñadir");

            aña.addEventListener("click", function() {
                modalAñadir.showModal();
            });
            var cerrar = document.getElementById("cerrarCarrito");

            cerrar.addEventListener("click", function(){
                modalAñadir.close();
            });
        </script>
</body>
</html>