<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Yuntas</title>
  <link rel="stylesheet" href="public/css/login.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>
<body>
  <img src="public/img/Ylogo.png" alt="">
  <div class="login">
    <h1>Login</h1>
    <form method="post" action="ingresar">
      <input type="text" name="u" placeholder="Usuario" required="required" />
      <input type="password" name="p" placeholder="Contraseña" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
    </form>
  </div>
</body>
</html>