<?php 
session_start();
unset($_SESSION["admin"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Admin/css/estilo.css">
    <title>Cerro sesion</title>
</head>
<body class="bodyAdmin2">
<h1 class="home">Usted cerro sesion</h1>
<a class="botondevolver" href="../ingresar.php">Regresar</a>
</body>
</html>
