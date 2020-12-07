<!-- Funcion Javascript -->
<script>
function goBack() {
  window.history.back()
}
</script>
<!-- End Javascript -->
<?php
require __DIR__ . '../php/controllers/trae.gen.controlador.php';
require __DIR__. '../views/footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../Admin/css/estilo.css">
<link rel="stylesheet" href="css/switch.css">
</head>
<!-- //Boton volver -->
<button onclick="goBack()" class="botondevolver">Back home</button>
<body class="bodySongGen">
<h1 class="homeGen">Home</h1>
<section class="margin400px" id="sectionn">
    <div class="row">
    <?php if(count($canciones)): ?>         
<div class="container mt-2">
  <div class="row">
  <?php foreach($canciones as $cancion): ?>
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
    <img src="../../Portadas/<?php echo $cancion->portada; ?>"alt="<?php echo $cancion->tema ?>"class="classimg" height="250px" width="100%">
        <h5 class="card-title mt-2 mb-2"><?php echo $cancion->tema ?></h5>
        <p class="card-text">Duracion: <?php echo $cancion->duracion ?></p> 
        <p >Año de Lanzamiento: <?php echo $cancion->lanzamiento ?></p>
        </div>
</div>
<?php endforeach; ?>
            <?php else: ?>
                <h1 class="home">No se encuentran canciones</h1>
            <?php endif; ?>
        </div>
    </div>
    </section>
</body>
</html>