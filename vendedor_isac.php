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
  
  
section.cuadro{
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
  .a img{
    border-radius: 100%;
    width: 250px;
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
  }
  .botoncito { 
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
  border-radius: 5px;
  cursor: pointer;
  
  }
  .pan, .char, .joqui, .bomm, .panoch {
    padding: 10px 20px;
    background-color: transparent;
    border: transparent;
  }
  .d{
    font-size: 100px;
    grid-area: d;
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
            <h1 class="d">VENDEDOR</h1>
          </nav>
        </div>

        <div class="b">
            <table>
                <tr>
                    <th>Clientes</th>
                    <th>Productos</th>
                    <th>Gestion de pedidos</th>
                    <th>Registro de venata</th>
                    <th>Precio de todo el pedido</th>
                </tr>
                <tr>
                    <td><button class="pan" id="pan">Fabricio</button></td>
                    <td>Jugo de horvhta (baso de Bambu)</td>
                    <td>En proceso de producccion</td>
                    <td>Pendiente</td>
                    <td>5 Bs</td>
                </tr>
                <tr>
                    <td><button class="char" id="char">Jesenia</button></td>
                    <td>Agua de jamaica (en Tutuma)</td>
                    <td>Entregado al cliente</td>
                    <td>Realizado</td>
                    <td>3 Bs</td>
                </tr>
                <tr>
                    <td><button class="joqui" id="joqui">Fabiana</button></td>
                    <td>Moconchinchi (baso de Bambu)</td>
                    <td>Entregado al cliente</td>
                    <td>Pendiente</td>
                    <td>5 Bs</td>
                </tr>
                <tr>
                    <td><button class="bomm" id="bomm">Andre</button></td>
                    <td>Limonada (en Tutuma)</td>
                    <td>En proceso de produccion</td>
                    <td>Pendiente</td>
                    <td>3 Bs</td>
                </tr>
                <tr>
                    <td><button class="panoch" id="panoch">Agustin</button></td>
                    <td>Jugo de coco (baso de Bambu)</td>
                    <td>Entregado al cliente</td>
                    <td>Realizado</td>
                    <td>5 Bs</td>
                </tr>
            </table>
        </div>
        <dialog class="modal">
            <h2>Pantera</h2><br>
            <p>Nombre: Isac Castellon</p>
            <p>Correo: isacCaste45@gmail.com</p>
            <p>Telefono: 54980909</p>
            <p>Direccion: Avenida America</p>
            <form  method="dialog">
                <button class="pan">cerrar</button>
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
            modal.innerHTML = "<h2>Fabricio</h2><p>Nombre: Fabricio Calero</p><p>Correo: fricac@gmail.com</p><p>Telefono: 54980909</p><p>Direccion: Avenida America</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        char.addEventListener("click", function() {
            modal.innerHTML = "<h2>C Jesenia</h2><p>Nombre: Jesenia Copa</p><p>Correo: Jesscop34@gmail.com</p><p>Telefono: 98679376</p><p>Direccion: Avenida Libertador</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        joqui.addEventListener("click", function() {
            modal.innerHTML = "<h2> Fabiana</h2><p>Nombre: Fabiana Herrera</p><p>Correo: Fabiherreara@gmail.com</p><p>Telefono: 43251636</p><p>Direccion: Avenida Beingjin</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        bomm.addEventListener("click", function() {
            modal.innerHTML = "<h2> Andre</h2><p>Nombre: Andre Aramayo</p><p>Correo: bradpid@gmail.com</p><p>Telefono: 78436245</p><p>Direccion: Avenida Villazon</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
        panoch.addEventListener("click", function() {
            modal.innerHTML = "<h2>Agustin</h2><p>Nombre: Agustin Veizaga</p><p>Correo: Agusmichi@gmail.com</p><p>Telefono: 63894234</p><p>Direccion: Avenida Balco Galindo</p><form  method='dialog'><center><button class='botoncito'>cerrar</button></center></form>";
            modal.showModal();
        });
    </script>
</body>
</html>