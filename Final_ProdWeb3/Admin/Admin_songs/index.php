<?php
session_start();
require '../../Admin/php/controllers/index_controlador.php';

?>


<!-- Funcion Javascript -->
<script>
function goBack() {
  window.history.back()
}
</script>
<a class="botoncerrarsesion" href="logout.php">Logout</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de canciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../Admin/css/estilo.css">
     <link rel="icon" href="../../../portadas/icono.ico" /> 
</head>

<!-- //Boton volver -->
<button onclick="goBack()" class="botondevolver">Back</button>
<a href="../../Admin/Admin_songs/add.php"><button type="button" class="botondevolver">+Add</button></a>
<body class="bodyadmin2"> 
    <h1 class="home">Home</h1>
<div class="container">
<div class="tienetodo">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_SESSION['alert']) && $_SESSION['alert']['message']): ?>
                <div class="alert alert-<?php echo $_SESSION['alert']['type'] ?>">
                    <?php echo $_SESSION['alert']['message']; ?>
                </div>
            <?php unset($_SESSION['alert']); ?>
            <?php endif; ?>
            <table  class="w3-table w3-striped">
                <thead>
                    <tr>
                        <td class="columnas">Imagen Album</td>
                        <td class="columnas">Canciones</td>
                        <td class="columnas">Duracion</td>
                        <td class="columnas">Configuracion</td>                
                 </tr>
                </thead>
                <tbody>
                   <!-- tablas -->
                    <?php foreach($canciones as $cancion): ?>
                        <tr>
                            <td>
                            <img src="../../Portadas/<?php echo $cancion->portada; ?>" class="rounded" class="rounded float-left" width="170px" height="170px"alt="foto album">
                            </td>
                            <td>
                            <?php echo $cancion->tema; ?>
                            </td>
                            <td>
                            <?php echo $cancion->duracion; ?></td>
                            <td>
                                <a href="../Admin_Songs/edit.php?id=<?php echo $cancion->id; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                <a href="../Admin_Songs/delete.php?id=<?php echo $cancion->id; ?>" onclick="return confirm('¿Desea eliminar la cancion seleccionada?');"class="btn btn-danger"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</body>
</html>

