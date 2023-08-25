<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Contactanos</title>
  <link rel="stylesheet" href="public/css/contactanos.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>
<body>
<?php	require_once("views/layouts/navbar.php");?>
<div class="container">
  <h1 style="padding: 0.5em; position: relative; top: 25px">Contáctanos</h1>
  <p>Completa el siguiente formulario para contactarse con nosotros,<br> donde te responderemos lo más rápido y breve posible. Muchas Gracias!.</p>
  <div class="container-form">
  
    <form action="enviarContactanos" method="post">
      <label for="nomApe">Nombre y apellido</label>
      <input type="text" name="nomApe" id="nomApe">
      <label for="correo">Corrreo electrónico</label>
      <input type="email" name="correo" id="correo">
      <label for="telf">Teléfono o número de celular</label>
      <input type="number" min="900000000" max="999999999" name="telf" id="telf">
      <label for="msg">Mensaje</label>
      <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
      <button type="submit">Enviar</button>
    </form>
  </div>
</div>
<?php require_once("views/layouts/footer.php") ?>
</body>
</html>