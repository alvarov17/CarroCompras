
<?php

require 'database.php';
require 'usuario.php';

$nombre = $_POST['txtNombre'];
$password = $_POST['txtPassword'];
$estado = $_POST['txtEstado'];

if ($estado == "reg") {
  Usuario::registro($nombre, $password, $conn);

} else {
  Usuario::login($nombre, $password, $conn);
}





?>
