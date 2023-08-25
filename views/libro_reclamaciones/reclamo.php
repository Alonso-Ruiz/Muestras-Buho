<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Libro de reclamaciones</title>
  <link rel="stylesheet" href="public/css/reclamo.css">
  <?php require_once("views/layouts/enlaces.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php	require_once("views/layouts/navbar.php");?>

<form name="formulario" id="formulario" action="enviarReclamo" method="post" class="container">
  <h2>1.Identificación del reclamante</h2>
  <div class="form-group entradas-container">
    <div class="row g-md-3">
      <div class="col-auto col-md-3">
        <label for="fechaIncidente">Fecha del incidente</label>
        <input name="fechaIncidente" id="fechaIncidente" type="date" class="form-control">
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="nombres">Nombres</label>
        <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombres">
      </div>
      <div class="col">
        <label for="apellidos">Apellidos</label>
        <input name="apellidos" id="apellidos" type="text" class="form-control" placeholder="Apellidos">
      </div>
    </div>
    <div class="row g-1 g-md-3 special-container">
      <div class="col">
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
        <input name="fechaNacimiento" id="fechaNacimiento" type="date" class="form-control" placeholder="First name">
      </div>
      <div class="col">
        <label for="tipoDocumento">Tipo de documento</label>
        <select class="form-select" name="tipoDocumento" id="tipoDocumento">
          <option selected>Seleccionar...</option>
          <option value="1">Pasaporte</option>
          <option value="2">DNI</option>
        </select>
      </div>
      <div class="col-auto col-sm">
        <label for="numDocumento">Nro. de documento</label>
        <input name="numDocumento" id="numDocumento" type="text" class="form-control" placeholder="Nro. de documento">
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="departamento">Departamento</label>
        <input name="departamento" id="departamento" type="text" class="form-control" placeholder="Departamento">
      </div>
      <div class="col">
        <label for="provincia">Provincia</label>
        <input name="provincia" id="provincia" type="text" class="form-control" placeholder="Provincia">
      </div>
      <div class="col">
        <label for="distrito">Distrito</label>
        <input name="distrito" id="distrito" type="text" class="form-control" placeholder="Distrito">
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="dirDomicilio">Dirección del domicilio</label>
        <input name="dirDomicilio" id="dirDomicilio" type="text" class="form-control" placeholder="Dirección">
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="telefono">Teléfono fijo / móvil</label>
        <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Telefono">
      </div>
      <div class="col">
        <label for="correo">Correo electrónico</label>
        <input name="correo" id="correo" type="text" class="form-control" placeholder="Correo">
      </div>
    </div>
  </div>
  <h2>2.Descripción del reclamo</h2>
  <div class="form-group entradas-container">
    <div class="row g-md-3">
      <div class="col">
        <label for="montoReclamo">Monto del producto</label>
        <input name="montoReclamo" id="montoReclamo" type="number" class="form-control" placeholder="Monto">
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="detProblema">Detalle del problema</label>
        <input name="detProblema" id="detProblema" type="text" class="form-control" placeholder="Detalle">
      </div>
    </div>
    <div class="row g-md-3">
      <div class="col">
        <label for="solProblema">Peticiones</label>
        <input name="solProblema" id="solProblema" type="text" class="form-control" placeholder="Petición">
      </div>
    </div>
  </div>
  <div class="form-group button-container">
    <button type="submit">Enviar</button>
  </div>
</form>

<?php require_once("views/layouts/footer.php") ?>
</body>
</html>