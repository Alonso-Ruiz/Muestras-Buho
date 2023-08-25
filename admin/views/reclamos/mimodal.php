<?php
        include "../../core/conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM reclamo WHERE idReclamo = $Id";
        $resultado = $conn->query($Sql);

        $Fila = $resultado->fetch_assoc();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Detalles</title>
    <link rel="stylesheet" href="../../public/css/reclamo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>


<form name="formulario" id="formulario" action="enviarReclamo" method="post" class="container">
  <h2>Identificación del reclamante</h2>
  <div class="form-group entradas-container">
    <div class="row g-md-3">
      <div class="col">
        <label for="fechaIncidente">Fecha del incidente</label>
        <input name="nombres" id="nombres" type="text" class="form-control w-100"  value=" <?php echo $Fila["fecIncidente"]?>" readonly >
      </div>
      <div class="col">
        <label for="telefono">Teléfono fijo / móvil</label>
        <input name="telefono" id="telefono" type="text" class="form-control" value=" <?php echo $Fila["telefono"]?>" readonly >
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="nombres">Nombres</label>
        <input name="nombres" id="nombres" type="text" class="form-control"  value=" <?php echo $Fila["nombres"]?>" readonly >
      </div>
      <div class="col">
        <label for="apellidos">Apellidos</label>
        <input name="apellidos" id="apellidos" type="text" class="form-control" value=" <?php echo $Fila["apellidos"]?>" readonly >
      </div>
    </div>
    <div class="row g-1 g-md-3 special-container">
      <div class="col">
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
        <input name="fechaNacimiento" id="fechaNacimiento" type="text" class="form-control" value=" <?php echo $Fila["fecNacimiento"]?>" readonly >
      </div>
      <div class="col">
        <label for="tipoDocumento">Tipo de documento</label>
        <input name="fechaNacimiento" id="fechaNacimiento" type="text" class="form-control" value=" <?php echo $Fila["tipoDocumento"]?>" readonly >

      </div>
      <div class="col-auto col-sm">
        <label for="numDocumento">Nro. de documento</label>
        <input name="numDocumento" id="numDocumento" type="text" class="form-control" value=" <?php echo $Fila["numDocumento"]?>" readonly >
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="departamento">Departamento</label>
        <input name="departamento" id="departamento" type="text" class="form-control" value=" <?php echo $Fila["departamento"]?>" readonly >
      </div>
      <div class="col">
        <label for="provincia">Provincia</label>
        <input name="provincia" id="provincia" type="text" class="form-control" value=" <?php echo $Fila["provincia"]?>" readonly >
      </div>
      <div class="col">
        <label for="distrito">Distrito</label>
        <input name="distrito" id="distrito" type="text" class="form-control" value=" <?php echo $Fila["distrito"]?>" readonly >
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="dirDomicilio">Dirección del domicilio</label>
        <input name="dirDomicilio" id="dirDomicilio" type="text" class="form-control" value=" <?php echo $Fila["direccion"]?>" readonly >
      </div>
    </div>
    <div class="row g-md-3">
      
      <div class="col">
        <label for="correo">Correo electrónico</label>
        <input name="correo" id="correo" type="text" class="form-control w-100" value=" <?php echo $Fila["correo"]?>" readonly >
      </div>
    </div>
  </div>
  <h2>Descripción del reclamo</h2>
  <div class="form-group entradas-container">
    <div class="row g-md-3">
      <div class="col">
        <label for="montoReclamo">Monto del producto</label>
        <input name="montoReclamo" id="montoReclamo" type="text" class="form-control" value="S/<?php echo $Fila["monto"]?>" readonly >
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="detProblema">Detalle del problema</label>
        <input name="detProblema" id="detProblema" type="text" class="form-control" value=" <?php echo $Fila["problema"]?>" readonly >
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="solProblema">Peticiones</label>
        <input name="solProblema" id="solProblema" type="text" class="form-control" value=" <?php echo $Fila["peticion"]?>" readonly >
      </div>
    </div>
  </div>
  <div class="form-group button-container">
 
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Regresar</button>

  </div>
</form>
</body>
</html>
