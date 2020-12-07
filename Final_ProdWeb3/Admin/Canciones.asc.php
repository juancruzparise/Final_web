<?php
require __DIR__ . '/php/controllers/order.controlador.php' ;
require __DIR__ . '/php/controllers/buscador.controlador.php' ;
?>
<script>
function goBack() {
  window.history.back()
}
</script>
<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Admin/css/estilo.css">
    </head>
    <body class="cancionesasc">
    <center><h1 class="home">Canciones Alfabeticamente</h1></center>

<!-- //Boton volver -->
<button onclick="goBack()" class="botondevolver">Back</button>    
<form  method="GET" action="?" >
 <input type="text" id="tema" name="tema" placeholder="ingrese cancion" >
 <i class="fa fa-search"></i>
</form> 
 <div class="container mt-2">
  <div class="row">
  <?php foreach($canciones as $cancion): ?>
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
      <a href="views/individual.php?id=<?php echo $cancion->id ?>">
    <img src="../Portadas/<?php echo $cancion->portada; ?>" alt="<?php echo $cancion->tema ?>" height="250px" width="100%">
        <h5 class="card-title mt-2 mb-2"><?php echo $cancion->tema ?></h5>
        <p class="card-text">Duracion: <?php echo $cancion->duracion ?></p> 
        <p class="card-text">Año de lanzamiento: <?php echo $cancion->lanzamiento ?></p> 
  </div>
  </div>
<?php endforeach; ?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
 </html>