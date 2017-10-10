<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
  <body>

    <!--navbar-->
    <nav class="navbar navbar-default " role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="#" data-toggle="modal" data-target="#modalRegister">Registro</a></li>
          <li><a href="#" data-toggle="modal" data-target="#ModalLogin">Iniciar Sesión</a></li>
        </ul>
      </div>
    </nav>

    <!-- ModalRegistro -->
    <div id="modalRegister" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ingrese sus datos</h4>
          </div>
          <div class="modal-body">
            <form action="ingreso.php" method="post">
               <div class="form-group">
                 <label for="">Nombre</label>
                 <input type="text" class="form-control" placeholder="Ingrese su nombre" name="txtNombre">
               </div>
               <div class="form-group">
                 <label for="">Contraseña</label>
                 <input type="text" class="form-control" placeholder="Ingrese su nombre" name="txtPassword">
               </div>
               <input type="hidden" name="txtEstado" value="reg">
               <button type="submit" class="btn btn-default">Registrarse</button>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- ModalLogin -->
    <div id="ModalLogin" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ingrese sus datos</h4>
          </div>
          <div class="modal-body">
            <form action="ingreso.php" method="post">
               <div class="form-group">
                 <label for="">Nombre</label>
                 <input type="text" class="form-control" placeholder="Ingrese su nombre" name="txtNombre">
               </div>
               <div class="form-group">
                 <label for="">Contraseña</label>
                 <input type="text" class="form-control" placeholder="Ingrese su nombre" name="txtPassword">
               </div>
               <input type="hidden" name="txtEstado" value="log">
               <button type="submit" class="btn btn-default">Loguear</button>
            </form>
          </div>
        </div>

      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
