<?php
    session_start();
	include "core/conexion.php";

	$nom=$_POST['nom'];
    $ape=$_POST['ape'];
	$correo=$_POST['correo'];
    $cel=$_POST['cel'];
	
    $fecha=date('Y-m-d');

   
    $sql = "INSERT INTO `personaliza` (nom, ape , correo , cel , fechaPersonaliza) 
                VALUES ('$nom','$ape','$correo','$cel','$fecha')"; 
   
  
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: ".$_SERVER['HTTP_REFERER']."");
    }else {
        echo "No se insertaron los datos";
    }
?>
