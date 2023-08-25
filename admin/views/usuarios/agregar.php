<?php
    session_start();
	include "../../core/conexion.php";

	$user=$_POST['usuario'];
    $pass=$_POST['contrasena'];
	$dni=$_POST['dni'];
    $sql = "INSERT INTO `usuarios` ( usuario , contrasena, dni) 
            VALUES ('$user', aes_encrypt('$pass','key'), '$dni')";
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: http://yuntasproducciones.com/admin/usuarios");
    }else {
        echo "No se insertaron";
    }
?>