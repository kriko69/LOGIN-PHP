<?php
    session_start();
    if(!isset($_SESSION['usuario'])) //si no hay dats en $_SESSION[úsuario]
    {
        header('Location:login.php');
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <title>BIENVENIDA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron col-lg-auto">
        <h3 class="display-4">Bienvenido</h3>
        <p class="lead">Usuario: <?php echo $_SESSION['usuario']?></p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-sm-12"></div>
             <div class="col-md-1 col-sm-12">
                <a href="salir.php"><button type="button" class="btn btn-danger">Cerrar Sesion</button></a>
            </div>
        </div>
    </div>
       



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>