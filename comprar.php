<?php
$jugo = $_GET['jugo'];
$precio = $_GET['precio'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <style>
body{
  font-family: Arial, sans-serif;
  margin: 0;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: #064e3b;
  color: #e6ffee;
}
main.main {
  flex: 1;               
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
}
.form-box{
  background: linear-gradient(180deg,#16a34a 0%, #059669 100%); 
  padding: 28px;
  border-radius: 12px;
  width: 100%;
  max-width: 520px;
  box-shadow: 0 12px 30px rgba(2,6,23,0.6);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.08);
}

.form-box h1{
  text-align: center;
  font-size: 1.6rem;
  margin-bottom: 12px;
  letter-spacing: 1px;
  text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}
.form-grid{
  display: grid;
  gap: 12px;
  margin-top: 10px;
}
label{
  font-weight: 700;
  font-size: 0.95rem;
  text-shadow: 0 1px 2px rgba(0,0,0,0.25);
}
input[type="text"],
input[type="number"],
select{
  width: 100%;
  padding: 10px 12px;
  border-radius: 8px;
  border: none;
  outline: none;
  font-size: 1rem;
  box-sizing: border-box;
}

input[type="text"],
input[type="number"],
select{
  background: rgba(255,255,255,0.95);
  color: #063225;
}

.form-actions{
  display:flex;
  justify-content:center;
  margin-top: 8px;
}
input[type="submit"]{
  background: #064e3b;
  color: #fff;
  padding: 10px 18px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-weight: 700;
  letter-spacing: 0.5px;
  box-shadow: 0 6px 18px rgba(2,6,23,0.45);
}
input[type="submit"]:hover{
  background: #05392e;
}
.dropdown-content a:hover {
  background-color: #333;
  color: #5eff6ce5;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>

<?php
include ("encabezado.php");
?>

    <main class="main">
      <div class="form-box">
        <h1>¿Quieres comprar?</h1>
        <form action="carrito/insert_carrito.php" method="post" class="form-grid">
          <div>
            <label for="producto">Nombre del Usuario</label>
            <input id="usuario" type="text" name="usuario" >
          </div>

          <div>
            <label for="estado">ESTADO </label>
            <input id="estado" type="text" name="estado">
          </div>

          <div>
            <label for="producto">Nombre del Producto</label>
            <input id="produc" type="text" name="produc" value="<?php echo $jugo; ?>" readonly>
          </div>
         <label for="cantidad">Cantidad</label>
            <div>
             <input id="cantidad" type="number" name="cantidad" min="1" max="10" required>
          </div>

          <div>
            <label for="precio">Precio</label>
            <input id="precio" type="number" name="precio" value="<?php echo $precio; ?>" readonly>
          </div>

          <div>
            <label for="vendedor">Nombre del Vendedor</label>
            <input id="vendedor" type="text" name="vendedor" value="Isac Castellon" >
          </div>

          <div class="form-actions">
            <input type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </main>
    <?php
include("pie_pg.php");
?>
<script>
  $(document).ready(function(){
    $(".form-grid").validate({
      rules: {
        usuario: {
          required: true,
          minlength: 4,
          maxlength: 50
        },
        estado: {
          required: true,
          maxlength: 20
        },
        produc: {
          required: true,
          maxlength: 100
        },
        cantidad: {
          required: true,
          digits: true,
          min: 1,
          max: 10
        },
        vendedor: {
          required: true,
          minlength: 4,
          maxlength: 50
        }
      },
      messages: {
        usuario: {
          required: "Ingresa tu nombre",
          minlength: "El nombre debe tener al menos 4 caracteres",
          maxlength: "El nombre no puede superar los 50 caracteres"
        },
        estado: {
          required: "Ingresa tu estado",
          maxlength: "El estado no puede superar los 20 caracteres"
        },
        produc: {
          required: "El nombre del producto es requerido",
          maxlength: "El nombre del producto no puede superar los 100 caracteres"
        },
        cantidad: {
          required: "Ingresa la cantidad",
          digits: "La cantidad debe ser un número entero",
          min: "La cantidad debe ser al menos 1",
          max: "La cantidad no puede ser mayor a 10"
        },
        vendedor: {
          required: "Ingresa el nombre del vendedor",
          minlength: "El nombre del vendedor debe tener al menos 4 caracteres",
          maxlength: "El nombre del vendedor no puede superar los 50 caracteres"
        }
      },
      errorElement: "div",
      errorPlacement: function(error, element) {
        error.css({
          color: "#ffdddd",
          background: "#a12",
          padding: "6px",
          borderRadius: "6px",
          marginTop: "5px",
          fontSize: "0.9em"
        });
        error.insertAfter(element);
      }
    });
  });
</script>
</body>
</html>