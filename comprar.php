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
        <form action="insert_produc.php" method="post" class="form-grid">
          <div>
            <label for="Precio">Precio</label>
            <input id="Precio" type="text" name="Precio" value="<?php echo $precio; ?>" readonly>
          </div>

          <div>
            <label for="producto">Producto</label>
            <input id="producto" type="text" name="producto" value="<?php echo $jugo; ?>" readonly>
          </div>
         <label for="vasos">Vasos</label>
            <div>
             <select id="vasos" name="vasos" required>
              <option value="tutuma">tutuma</option>
              <option value="bambu">bambu</option>
              <option value="vasos de vidrio">vasos de vidrio</option>
            </select>
          </div>

          <div>
            <label for="cantidad">Cantidad</label>
            <input id="cantidad" type="number" name="cantidad" min="1" max="10" required>
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
</body>
</html>