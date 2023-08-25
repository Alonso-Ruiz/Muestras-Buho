<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Blog</title>
  <link rel="stylesheet" href="public/css/blog.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>
<body>
<?php	require_once("views/layouts/navbar.php");?>

<div class="container-cabezera">

</div>

<?php 
  include "core/conexion.php";

  require_once("views/blog/articulos.php");
?>


<div class="container">
    <h4 class="fw-light text-primary">Categoria 1</h4>
    <h2 class="fw-bold titulo-text"><?php echo $Fila['titular']?></h2>
      <div class="row">
            <div class="col-md-3  d-flex justify-content-center">
              <div class="img-autor "> 
              </div>
            </div>
            <div class=" text-autor">
        
                  <p class="fw-bold mb-0 titulo-text">Nombre del autor</p>
                  <p class="fw-light text-primary">Abril 25,2020</p>
             
            </div>
          </div>
        

    <div class="imagen-responsive ">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>" alt="#" class="img-fluid">
</div>
</div>


<?php require_once("views/layouts/footer.php") ?>
</body>
</html>