<?php require __DIR__ . '/../php/controllers/edit_controlador.php';
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
    <title>Canciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../Admin/css/estilo.css">
    <link rel="icon" href="../../Portadas/icono.ico" /> 
</head>
<body class="bodyAdmin2">
    <div class="container py-2">
        <div class="row">
    <div class="col-md-12">
    <!-- form -->
        <form action="../../Admin/php/controllers/update_controlador.php" method="POST" enctype="multipart/form-data">
         <h1 class="home">Actualizar cancion</h1>
            <div class="form-group">
                <label class="columnas" for="titulo">Nombre de Cancion</label>
                <input required type="text" class="form-control" id="tema" name="tema" value="<?php echo $cancion->tema ?>">
            </div>
            <div class="form-group">
            <label class="columnas" class="my-1 mr-2" for="generos_id">Genero de cancion</label>    
            <select name="generos_id" id="generos_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <?php foreach($generos as $genero):?>
            <option value="<?php echo $genero->generos_id?>"><?php echo $genero->nombre ?></option>
             <?php endforeach ?>
            </select>
            </div>
            <div class="form-group">
                <label class="columnas" for="duracion">Duracion</label>
                <input required type="text" class="form-control" id="duracion" name="duracion" value="<?php echo $cancion->duracion ?>">
            </div>
            <div class="form-group">
                <label  class="columnas"for="lanzamiento">Año de lanzamiento</label>
                <input type="text" class="form-control" id="lanzamiento" name="lanzamiento" value="<?php echo $cancion->lanzamiento ?>">
            </div>
            <div class="form-group">
                        <label class="columnas" for="portada">Portada</label>
                        <input type="file" class="form-control" id="portada" name="portada" value="">
                    </div>

            <div class="form-group">
                <button class="botoncerrarsesion" type="submit">Actualizar cancion</button>
            </div>
            <input type="hidden" name="id" value="<?php echo $cancion->id; ?>">
        </form>
    </div>
        </div>
    </div>
</body>
</html>