<?php

class Usuario
{
  public $nombre, $password;

  function __construct($nombre, $password)
  {
    $this->nombre = $nombre;
    $this->password = $password;
  }


   public static function registro($nombre, $password, $conn)
  {
    if ($conn->connect_error) die($conn->connect_error);
    $query = "insert into usuario(usu_nombre,usu_pass) values('$nombre','$password')";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
  }
  public static function login($nombre, $password, $conn)
  {
    if ($conn->connect_error) die($conn->connect_error);
    $query = "select * from usuario where usu_pass = '$password' and usu_nombre = '$nombre';";
    $result = $conn->query($query);
    if ($row = mysqli_fetch_array($result)) {
      session_start();
      $usuario = new Usuario($nombre,$password);
      $_SESSION['usuario'] = serialize($usuario);
      header('Location: home.php');
    } else {
      header('Location: index.php?error');
    }
  }


}


 ?>
