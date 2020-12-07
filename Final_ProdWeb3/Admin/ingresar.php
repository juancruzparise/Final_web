<?php require __DIR__ . '../views/header.php' ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="icon" href="../Portadas/icono.ico" /> 
    <link rel="stylesheet" href="../Admin/css/ingresar.css">
</head>
<body class="bodylogin">
<!-- Panel de login -->
<div class="login">
<div class="container">
<div class="row justify-content-center">
 <div class="col col-md-6 my-5">
 <div class="card my-3">
 <img src="../Portadas/img_login.svg" class ="imglogin" alt="Persona png">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                <?php include 'Alerts/message.php'; ?>
                <form method="POST" action="php/controllers/login.php">
                    <div class="form-group">
                        <label> Email </label>
                        <input placeholder= "Ingrese su email"  type="email" class="inputs" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label >Contraseña</label>
                        <input type="password" placeholder= "Ingrese su contraseña" class="inputs" id="password" name="password">
                    </div>
                    <p class="text-right">
                        <button type="submit" class="botton_login">Login</button>
                    </p>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
    </div>
</body>

</html>