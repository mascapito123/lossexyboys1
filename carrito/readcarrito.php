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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

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
</style>

<body>
  
    <?php
include ("encabezadocarri.php");
?>

    <section class="cuadro">
        <div class="a"><img src="Isac.png" alt="pep " class="isac" >
          <nav>
            <h1 class="d">ADMINISTRADOR</h1>
          </nav>
          <nav class="info">
          
            <button class="bot" id="añadir">AÑADIR</button>
            <dialog id="modalAñadir" class="modaluse">
              <form action="insert_carrito.php" method="post" class="use">

                  <label for="produc" class="use-label">Nombre del producto:</label>
                  <input type="text" class="use-input" id="produc" name="produc"><br>

                  <label for="cantidad" class="use-label">Cantidad:</label>
                  <input type="number" class="use-input" id="cantidad" name="cantidad" ><br>

                  <label for="precio" class="use-label">Precio:</label>
                  <input type="number" class="use-input" id="precio" name="precio" ><br>
    
                <input type="submit" value="Registrar" class="bot">
    
              </form>
            </dialog>
            
          </nav>
          <script>
            $(document).ready(function(){
              $(".use").validate({
                rules: {
                  produc: {
                    required: true,
                    maxlength: 100
                  },
                  cantidad: {
                    required: true,
                    digits: true,
                    min: 1,
                    max: 9999
                  },
                  precio: {
                    required: true,
                    number: true,
                    min: 0.01
                  }
                },
                messages: {
                  produc: {
                    required: "Ingresa el nombre del producto",
                    maxlength: "El nombre del producto no puede superar los 100 caracteres"
                  },
                  cantidad: {
                    required: "Ingresa la cantidad",
                    digits: "La cantidad debe ser un número entero",
                    min: "La cantidad debe ser al menos 1",
                    max: "La cantidad no puede superar los 9999"
                  },
                  precio: {
                    required: "Ingresa el precio",
                    number: "El precio debe ser un número válido",
                    min: "El precio debe ser mayor a 0"
                  }
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                  error.css({
                    color: "red",
                    marginTop: "5px",
                    fontSize: "0.9em"
                  });
                  error.insertAfter(element);
                }
              });
            });
          </script>
        </div>
        <div class="b">
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
                </tr>
                <tbody>
                <?php $i = 0; while($row = mysqli_fetch_assoc($query)):?>
                  <tr>
                    <td><button class="pan btn-modal" data-index="<?php echo $i; ?>"><?php echo $row['codigo']; ?></button></td>
                    <TD><?php echo $row['nombre']; ?></TD>
                    <td><?php echo $row['esatado']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['vendedor']; ?></td>
                    <td><?php echo $row['fecha_registro']; ?></td>
                    <td>
                      <a class="edi" href="editar_carrito.php?codigo=<?php echo $row['codigo']; ?>">EDITAR</a>
                      <a class="eli" href="eliminar_carrito.php?codigo=<?php echo $row['codigo']; ?>">ELIMINAR</a>
                    </td>
                </tr>
                <?php $i++; endwhile;?>
                </tbody>
            </table>
        </div>
    </section>
    <?php
     include("../pie_pg.php");
    ?>
<script>

        var aña = document.getElementById("añadir");
        var modalAñadir = document.getElementById("modalAñadir");
        aña.addEventListener("click", function() {
            modalAñadir.showModal();
        });
    </script>

</body>
</html>