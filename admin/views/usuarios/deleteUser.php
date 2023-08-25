<?php
session_start();

include "core/conexion.php";
$idUsuario = $_POST['idUsuario'];

$sql = "DELETE FROM usuarios WHERE idUsuario = $idUsuario";


if ($conn->query($sql) === TRUE) {
     header("Location: usuarios");
  } else {
    echo "Error al eliminar el usuario: " . $conn->error;
  }
  