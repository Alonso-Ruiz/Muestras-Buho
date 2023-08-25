<?php
    session_start();
	include "core/conexion.php";

  $fecIncidente=$_POST['fechaIncidente'];
	$nomb=$_POST['nombres'];
	$ape=$_POST['apellidos'];
  $fecNacimiento=$_POST['fechaNacimiento'];
  $tipoDocumento=$_POST['tipoDocumento'] == 2 ? 'dni' : 'pasaporte';
  $numDocumento=$_POST['numDocumento'];
  $departamento=$_POST['departamento'];
  $provincia=$_POST['provincia'];
  $distrito=$_POST['distrito'];
  $dirDomicilio=$_POST['dirDomicilio'];
  $telf=$_POST['telefono'];
  $correo=$_POST['correo'];
  $montoReclamo=$_POST['montoReclamo'];
  $detProblema=$_POST['detProblema'];
  $solProblema=$_POST['solProblema'];

  $sql = "INSERT INTO `reclamo` ( 
            fecIncidente , 
            nombres , 
            apellidos, 
            fecNacimiento,
            tipoDocumento,
            numDocumento,
            departamento,
            provincia,
            distrito,
            direccion,
            telefono,
            correo,
            monto,
            problema,
            peticion
          ) VALUES (
            '$fecIncidente',
            '$nomb',
            '$ape',
            '$fecNacimiento',
            '$tipoDocumento',
            '$numDocumento',
            '$departamento',
            '$provincia',
            '$distrito',
            '$dirDomicilio',
            '$telf',
            '$correo',
            '$montoReclamo',
            '$detProblema',
            '$solProblema'
          )";

  $resultado = $conn -> query($sql);

  if ($resultado) {
    header("Location: libro_reclamaciones");
  }else {
    echo "No se insertaron los datos";
  }

?>