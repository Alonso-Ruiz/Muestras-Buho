<?php
session_start();

error_reporting(1);

include "../../core/conexion.php";

$Id = $_REQUEST['IdEditar'];

$Nombre = $_POST['NombreTelefono'];
$Descripcion = $_POST['DescripcionTelefono'];
$imagen = addslashes(file_get_contents($_FILES['ImagenTelefono']['tmp_name'])) === '' ? null : addslashes(file_get_contents($_FILES['ImagenTelefono']['tmp_name']));

if($imagen === null) {
    $sql = "UPDATE articulos SET 
    titular = '$Nombre', 
    detalle = '$Descripcion'
    WHERE idArticulo = $Id";    
}else {
    $sql = "UPDATE articulos SET 
    titular = '$Nombre', 
    detalle = '$Descripcion',
    imagen = '$imagen' WHERE idArticulo = $Id";
}

$resultado = $conn->query($sql);

if ($resultado) {
    header("Location: https://yuntasproducciones.com/admin/blog");
}else {
    echo "No se insertaron los datos";
}