<?php
session_start();

include "core/conexion.php";

$id = mysqli_real_escape_string($conn, $_POST['id']);


$sql = "DELETE FROM personaliza  WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$resultado = $stmt->execute();

if ($resultado) {
    header("Location: consultas");
}else {
    echo "No se insertaron los datos";
}