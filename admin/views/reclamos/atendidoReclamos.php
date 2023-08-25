<?php
session_start();

include "core/conexion.php";
$idReclamo = $_POST['idReclamo'];

$sql = "DELETE FROM reclamo WHERE idReclamo = $idReclamo";


if ($conn->query($sql) === TRUE) {
     header("Location: reclamos");
  } else {
    echo "Error al eliminar el reclamo: " . $conn->error;
  }
  