<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="admin1";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }
    $sql= "SELECT * FROM adminis";
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
</head>
<body>
    <?php
include ("encabezado.php");
?>
    <section class="cuadro">
        <div class="a"><img src="Isac.png" alt="pep " class="isac" >
          <nav>
            <h1 class="d">ADMINISTRADOR</h1>
          </nav>
          <nav class="info">
          
            <button class="bot" id="añadir">AÑADIR</button>
            <dialog id="modalAñadir" class="modaluse">
              <form action="insertar_admin.php" method="post" class="use">
                  <label for="usuario" class="use-label">Usuario:</label>
                  <input type="text" class="use-input" id="usuario" name="usuario" ><br>

                  <label for="nombre" class="use-label">Nombre:</label>
                  <input type="text" class="use-input" id="nombre" name="nombre"><br>

                  <label for="tele" class="use-label">Teléfono:</label>
                  <input type="number" class="use-input" id="tele" name="tele" ><br>

                  <label for="naci" class="use-label">Fecha de nacimiento:</label>
                  <input type="date" class="use-input" id="naci" name="naci" ><br>

                  <label for="correo" class="use-label">Correo:</label>
                  <input type="email" class="use-input" id="correo" name="correo" ><br>

                  <label for="contraseña" class="use-label">Contraseña:</label>
                  <input type="password" class="use-input" id="contraseña" name="contraseña"><br>

                  <label for="reportes" class="use-label">Reportes:</label>
                  <input type="text" class="use-input" id="reportes" name="reportes"><br>

                  <label for="tipo" class="use-label">Genero:</label>
                  <select class="use-input" id="tipo" name="tipo">
                    <option value="opcion_1">Hombre</option>
                    <option value="opcion_2">Mujer</option>
                    <option value="opcion_3">Prefiero no decirlo</option>
                  </select>
                  
                  <label for="dire" class="use-label">Dirección:</label>
                  <input type="text" class="use-input" id="dire" name="dire"><br>
    
                <input type="submit" value="Registrar" class="bot">
    
              </form>
            </dialog>
            
          </nav>
          <script>
            $(document).ready(function(){
              $(".use").validate({
                rulesa:{
                  usuario:{
                    requierd: true,
                    minlegnth: 6,
                    maxlegnth: 15
                  },
                  nombre:{
                    required: true,
                    maxlegth: 15
                  },
                  tele:{
                    required: true,
                    maxength: 8,
                    minlength: 8
                  },
                  naci:{
                    reqiored: true
                  },
                  correo:{
                    required: true
                  },
                  contraseña:{
                    required: true,
                    maxlenght: 20,
                    minlenght: 8
                  },
                  reportes:{
                    maxlength: 150
                  },
                  dire:{
                    required: true,
                    maxlength: 200
                  }
                }
              })
            })
          </script>
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
                <tbody>
                <?php $i = 0; while($row = mysqli_fetch_assoc($query)):?>
                  <tr>
                    <td><button class="pan btn-modal" data-index="<?php echo $i; ?>"><?php echo $row['usuario']; ?></button></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['contraseña']; ?></td>
                    <td><?php echo $row['reportes']; ?></td>
                    <td><?php echo $row['tipo']; ?></td>
                    <td>
                      <a class="edi" href="editar_admin.php?id=<?php echo $row['id']; ?>">EDITAR</a>
                      <a class="eli" href="eliminar_admin.php?id=<?php echo $row['id']; ?>">ELIMINAR</a>
                    </td>
                  </tr>
                  <dialog class="modal modaltodo" data-index="<?php echo $i; ?>">
                    <center><h2><?php echo $row['usuario']?></h2><br></center>
                    <p>Nombre:<?php echo $row['nombre']?></p>
                    <p>Telefono:<?php echo $row['tele']?></p>
                    <p>Fecha de nacimiento: <?php echo $row['naci']?></p>
                    <p>Correo: <?php echo $row['correo']?></p>
                    <p>Direccion:<?php echo $row['dire']?></p>
                    <form  method='dialog'>
                      <center><button class='botoncito'>cerrar</button></center>
                    </form>
                  </dialog>
                <?php $i++; endwhile;?>
                </tbody>
            </table>
        </div>
    </section>
    <?php
     include("pie_pg.php");
    ?>
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