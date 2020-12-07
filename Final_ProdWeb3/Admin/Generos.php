<?php 
require __DIR__ . '../views/header.php' ;
require __DIR__ . '../Admin_generos/index.php' ; 
require 'views/footer.php'; 
require __DIR__ . '../models/index.canciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../Admin/css/estilo.css">
<link rel="stylesheet" href="../Admin/css/switch.css">
<link rel="icon" href="../Portadas/icono.ico" />
</head>
<body>
<section class="margin400px" id="sectionn">
    <h1 class="home_genero">Generos de Canciones</h1>
    <div class="container mt-2">
  <div class="row">
  <?php foreach($generos as $genero): ?>
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
      <center><a class ="textgenero"href="Canciones.php?generos_id=<?php echo $genero->generos_id ?>"><?php echo $genero->nombre ?><img src="../Portadas/<?php echo $genero->portada_genero; ?>"  alt="Photo of sunset" height="250%" width="100%"></a></center>
  </div>
  </div>
  <?php endforeach; ?>
  </section>
</body>
</html>