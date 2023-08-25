<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Libro de reclamaciones</title>
  <link rel="stylesheet" href="public/css/libro_reclamaciones.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>
<body>
<?php	require_once("views/layouts/navbar.php");?>

<h1>Libro de reclamaciones</h1>
<p>Estamos aquí para ayudarte y apoyarte en cualquier incoveniente que hayas tenido<br>o de alguna manera hemos ocacionado. Puedes elegir una de las dos opciones.</p>

<div class="cards">
  <div class="cards-card">
    <h3>Reclamación</h3>
    <p>En caso se presente alguna incomodidad<br>o disconformidad con: </p>
    <div class="cards-items">
      <div class="cards-items__item">
        <img src="public/icons/10.1.png" alt="#">
        <p>Problemas con nuestro productos</p>
      </div>
      <div class="cards-items__item">
        <img src="public/icons/11.1.png" alt="#">
        <p>Fallas detectadas con nuestro productos</p>
      </div>
      <div class="cards-items__item">
        <img src="public/icons/12.1.png" alt="#">
        <p>Problemas con el libro de reclamos</p>
      </div>
      <div class="cards-items__item">
        <img src="public/icons/13.1.png" alt="#">
        <p>Inconvenientes con el pago</p>
      </div>
    </div>
  </div>
  <div class="cards-card">
    <h3>Queja</h3>
    <p>En caso se presente alguna incomodidad<br>o disconformidad con: </p>
    <div class="cards-items">
      <div class="cards-items__item">
        <img src="public/icons/14.1.png" alt="#">
        <p>Atención al cliente - Presencial</p>
      </div>
      <div class="cards-items__item">
        <img src="public/icons/15.1.png" alt="#">
        <p>Atención al cliente - Línea telefónica</p>
      </div>
      <div class="cards-items__item">
        <img src="public/icons/16.1.png" alt="#">
        <p>Atención al cliente - Redes sociales</p>
      </div>
      <div class="cards-items__item">
        <img src="public/icons/13.1.png" alt="#">
        <p>Inconvenientes con el pago</p>
      </div>
    </div>
  </div>
</div>

<div class="enlace-container">
  <a href="reclamo" class="enlace-reclamo">Realizar reclamo</a>
</div>
<?php require_once("views/layouts/footer.php") ?>
</body>
</html>