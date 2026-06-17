<!DOCTYPE html>
<html>
<head>
    <title>Principal</title>
</head>
<body>
<?php session_start();?>
<h2>Bienvenido <?php echo $_SESSION['usuario'].$_SESSION['id']?></h2>

<p>Esta página solo la pueden ver usuarios autenticados.</p>

<a href="cerrar.php">Cerrar Sesión</a>

</body>
</html>