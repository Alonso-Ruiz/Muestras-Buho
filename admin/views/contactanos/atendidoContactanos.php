<?php
session_start();

include "core/conexion.php";

$Id = $_POST['codigoId'];

$sql = "UPDATE contactanos SET estado = 0 WHERE codigo = $Id";

$resultado = $conn->query($sql);

if ($resultado) {
    header("Location: contactanos");
}else {
    echo "No se insertaron los datos";
}