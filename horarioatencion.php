<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Horario de Atención
Boomble</title>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
body {
font-family: Arial, sans-serif;
color: #6eb3f9ff;
margin: 0;
background-image: url(https://www.prensalibre.com/wp-content/uploads/2025/05/Jugos-naturales-01.jpg?quality=52);
background-size: cover;
background-position: center;
min-height: 100vh;
display: flex;
flex-direction: column;
}
h1 {
text-align: center;
color: #5eff6ce5;
}

table {
width: 100%;
margin-top: 20px;
}
.container {
max-width: 500px;
margin: 40px auto;
background-color: #ffffff;
padding: 30px;
border-radius: 10px;
flex: 1;

}
th, td {
padding: 12px;
text-align: left;
}

td{
background-color: skyblue;
color: white;
}

th {
background-color: #5eff6ce5;
color: black;
}

tr:nth-child(even) {
background-color: #25645a;
}
    .dropdown {
  position: relative;
  display: inline-block;
}

</style>
</head>
<body>
<?php
include ("encabezado.php");
?>

<section class="container">
<h1>Horario de Atención
Boomble</h1>
<table>
<thead>
<tr>
<th>Día</th>
<th>Horario</th>
</tr>
</thead>
<tbody>
<tr>
<td>Lunes</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Martes</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Miércoles</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Jueves</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Viernes</td>
<td>2:00 PM
4:00 PM</td>
</tr>
<tr>
<td>Sábado</td>
<td>Cerrado</td>
</tr>
<tr>
<td>Domingo</td>
<td>Cerrado</td>
</tr>
</tbody>
</table>
</section>
    <?php
      include("pie_pg.php");
    ?>
</body>
</html>