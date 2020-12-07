<?php
require __DIR__ . '/../php/controllers/individual.controlador.php' ;
?>
<!-- Funcion Javascript -->
<script>
function goBack() {
  window.history.back()
}
</script>
<!-- //Boton volver -->
<button onclick="goBack()" class="botondevolver">Back</button>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/individual.css">
    <title>Individual view</title>
</head>
<body>
<?php foreach($canciones as $cancion): ?>
    <div id="container">	
        <div class="product-details">
        <h1><?php echo $cancion->tema ?></h1>
        <h2>Genero:</h2>
        <?php foreach($generos as $genero): ?>
         <h2><?php if($cancion->generos_id == $genero->generos_id)
            echo $genero->nombre ?> </h2>
             <?php endforeach; ?>
    <div class="control">
        <button class="btn">
       <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
       <span class="buy">Listen now</span>
     </button>
    </div>      
    </div>
    <div class="product-image">
        <img src="../../Portadas/<?php echo $cancion->portada; ?>" alt="<?php echo $cancion->tema ?>">
    <div class="info">
        <h2>Datos de la cancion</h2>
        <ul>
          <li><p class="information">Año de lanzamiento: <?php echo $cancion->lanzamiento ?></p></li>
          <li><p class="information">Duracion: <?php echo $cancion->duracion ?></p></li>
        </ul>
    </div>
    </div>    
    </div>
 
<?php endforeach; ?>
</body>
</html>