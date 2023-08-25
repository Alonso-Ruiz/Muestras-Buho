<?php 
session_start();
include("core/conexion.php");

if (isset($_POST['u']) && isset($_POST['p'])){
  $usuario = $_POST['u'];
  $pass = $_POST['p'];

  $query = "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$pass'";
  $query1 ="SELECT usuario, CONVERT(aes_decrypt(contrasena, 'key') USING utf8) AS contrasena FROM usuarios WHERE usuario = '$usuario'";
  $res = mysqli_query($conn, $query1);
  if(mysqli_num_rows($res) == 1){
    $_SESSION['usuario'] = $usuario;
    header("Location: blog");
  }else {
    $_SESSION['message'] = 'Usuario o contrase«Ða incorrectas';
    $_SESSION['message_type'] = 'danger';
    header("Location: login");
  }
}
?>
