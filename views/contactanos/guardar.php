<?php
    session_start();
	include "core/conexion.php";

	$nomApe=$_POST['nomApe'];
	$correo=$_POST['correo'];
    $telf=$_POST['telf'];
	$msg=$_POST['msg'];
    $fecha=date('Y-m-d');
    $sql = "INSERT INTO `contactanos` ( nomApe , correo , telf, msg, fechaContacto) 
            VALUES ('$nomApe','$correo','$telf','$msg', '$fecha')";
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: ".$_SERVER['HTTP_REFERER']."");
    }else {
        echo "No se insertaron los datos";
    }

?>