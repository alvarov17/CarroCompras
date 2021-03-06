<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://unpkg.com/vue@2.5.0/dist/vue.js">
    </script>

  </head>
  <body>
    <?php
    include 'usuario.php';

    session_start();
    $usuario = unserialize($_SESSION['usuario']);
    ?>


    <!--navbar-->
    <nav class="navbar navbar-default " role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo "Bienvenido $usuario->nombre";?></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vue/homeScript.js">

    </script>
  </body>
</html>
