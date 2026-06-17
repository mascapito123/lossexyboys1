<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    ?>
    <h1>Bienvenido <?php echo $_SESSION['usuario']. $_SESSION['edad'];?></h1>
    <a href="cerrar1.php">cerrar sesion</a>
</body>
</html>