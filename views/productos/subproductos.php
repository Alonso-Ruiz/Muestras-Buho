
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="En Yuntas Producciones te brindamos nuevas experiencias para publicitar tu negocio. Ventas de Luces,Letreros y Pantallas LED .">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@500&family=Bungee&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/csswasap.css" >
    <link rel="stylesheet" href="public/css/productos.css" >

    <title><?=$subproductos['slug']?></title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    <?php require_once("views/layouts/enlaces.php") ?>
  </head>
  <body>
    <?php require_once("views/layouts/navbar.php");?>
    
<div class="container-fluid bg-black">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-12">
      <div id="carouselExampleIntervals" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if ($subproductos['id'] == '17' || $subproductos['id'] == '18' || $subproductos['id'] == '19'|| $subproductos['id'] == '20') { ?>

          <div class="carousel-item active" data-bs-interval="2000">
            <img src="public/img/collage.jpg.png" class="d-block w-100" alt="slide1">
          </div>
          
        <?php } else if ($subproductos['id'] == '5' || $subproductos['id'] == '6' || $subproductos['id'] == '7') { ?>
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="public/img/cuboled1.png" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="public/img/cuboled2.png" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="public/img/cuboled3.png" class="d-block w-100" alt="slide3">
            </div>
          <?php } ?>
        </div>
        <div class="carousel-indicators m-6 gap-5 position-relative">
                <?php if ($subproductos['id'] == '5' || $subproductos['id'] == '6' || $subproductos['id'] == '7') { ?>
              <button type="button" class="carousel-nav-item" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="0" style="background-image: url('public/img/cuboled1.png'); height: 60px; width: 80px;" aria-label="Slide 1"></button>
            <button type="button" class="carousel-nav-item" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="1" style="background-image: url('public/img/cuboled2.png'); height: 60px; width: 80px;" aria-label="Slide 2"></button>
            <button type="button" class="carousel-nav-item" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="2" style="background-image: url('public/img/cuboled3.png'); height: 60px; width: 80px;" aria-label="Slide 3"></button>
          <?php } ?>
                  <button type="button" class="carousel-nav-item active" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="" style="background-image: url('<?php echo $subproductos['id'] == '17' || $subproductos['id'] == '18' || $subproductos['id'] == '19' ? "public/img/collage.jpg.png" : "public/img/collage.jpg.png"; ?>');height: 60px;width: 80px;" aria-label="Slide 1"></button>
         
            </div>
      </div>
    </div>
  </div>
</div>
<?php
if ($subproductos['id'] == '5'|| $subproductos['id'] == '7') {
  $caracteristicas = array(
      
    'Emana 16 colores RGB cambiantes',
    'Medida: 40x40x40cm',
    'Cambia de colores RGB con el control remoto a distancia',
    'Se tiene la opción que la batería sea recargable, como también enchufado a corriente.',
    'Bajo energía de consumo',
    'Elaborado con polietileno al 100% de alta densidad.',
    'Ofrece 4 modos de diferentes cambios de luz.',

   
  );
  $beneficios = array(
    'Se puede dar diferentes usos',
    'Brinda un ambiente moderno',
    'Objeto práctico para recrear e iluminar ambientes variados',
    
  );
} elseif ($subproductos['id'] == '6') {
  $caracteristicas = array(
    'Emana 16 colores RGB cambiantes',
    'Cambia de colores RGB con el control remoto a distancia',
    'Funciona con batería recargable', 
    'Bajo energía de consumo',
    'Elaborado con polietileno al 100% de alta densidad.',
    'Ofrece 4 modos de diferentes cambios de luz',
    'Es perfecto para espacios como en jardines, terraza, restobares, discotecas, hoteles, negocios, entre otros',
  );
  $beneficios = array(
    'Objeto práctico para recrear e iluminar ambientes variados',
    'Brinda un ambiente moderno',
    'Se puede dar diferentes usos',
    
  );
} elseif ($subproductos['id'] == '17') {
  $caracteristicas = array(
    'Características de control alámbrico e inalámbrico para el funcionamiento',
    'Con respecto al color rojo es para el gallo A y verde para el gallo B',
    'El reloj gallero está compuesto por 4 caras, en la parte superior posee un cronómetro regresivo para los minutos y los segundos. ', 
    'En la parte inferior se podrá visualizar los segunderos, que tiene un uso primordialmente como indicadores que ocurre en los eventos de riñas de gallos. ',
    'Tiene 4 funcionalidades, con el cual se puede configurar en el cronómetro para horas y minutos regresivamente, otro para los eventos gallero que es de minutos y segundos.',
    ' La otra opción es progresiva con un cronómetro de minutos y segundos, y la última función es que brindará la hora actual. Se va a poder configurar todas estas funcionalidades con el control remoto que conlleva',
    'Tiene una conexión de 110v',

  );
  $beneficios = array(
    'Los jurados y el público en general va a tener un mejor conocimiento sobre los tiempos.',
    'Tiene una alta luminosidad lo cual permite una mejor visualización para el público en general',
    'Tendrán mayor control de los tiempos por parte de los competidores (dueños de los gallos)',
     
  );
   }elseif ($subproductos['id'] == '20') {
  $caracteristicas = array(
    'Emana un diseño moderno',
    'Dimensiones: 36 x 15 x 3 cm',
    'Sistema de ajuste sencillo', 
    'Ligero y resistente',
    'Tiene la opción de estar en calendario, alarma con música e indicador de temperatura',
    'Pantalla con amplia visualización de la hora, fecha, temperatura',
    ' Cuatro botones para configurar el reloj.',
'Batería incorporada para mantener los datos en caso si hay un corte de energía',
'Se adapta a diferentes lugares como en gimnasios, domicilios, negocios, oficinas, entre otros',
'Tiene una variedad de colores: rojo, azul y verde',
  );
  $beneficios = array(
    'La visualización de la hora es alta así sea a mayor o menor distancia',
    'Te ayuda a gestionar y programar tareas diarias',
    'Ayuda a tener una mejor organización',
     
  );
} elseif ($subproductos['id'] == '18'|| $subproductos['id'] == '19') {
  $caracteristicas = array(
    'Cuenta con cronómetros ascendente y descendente',
'Indica cronómetro en minutos y segundos,',
'El color del producto conlleva un color negro, dando así un aspecto de elegancia y modernidad',
'Hecho de estructura de aluminio',
'Marcador de Local y Visitante se puede poner hasta 3 dígitos cada uno y el Tiempo 1 dígito',
'Adecuado para todo tipo de cancha deportivo',
'Es visible hasta los 120 m de distancia y se maneja fácilmente.', 
'Es inalámbrico', 
  );
  $beneficios = array(
    'Mejora el rendimiento de los jugadores cuando están en plena competencia.',
    ' Es muy factible para los entrenamientos ya que al competir con puntos podría aumentar la concentración y poder calcular el tiempo en plena competencia.',
    'El público en general tendrá un mejor conocimiento de cómo está la competencia',
  );
} 
?>
    <div class="info-2 info-2-first pt-5">
      
      
<div class="container ">
  <div class="row">
  <?php if (!empty($caracteristicas)) { ?>
    <div class="col-md-6 pb-5">
      <div class="card cards">
        <div class="card-body card-bodys">
          <h5 class="card-title card-titles">Caracteristicas</h5>
          <ul class="card-text card-texts">
             <?php foreach ($caracteristicas as $caracteristica) { ?>
                <li><?= $caracteristica ?></li>
              <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php if (!empty($beneficios)) { ?>

    <div class="col-md-6 pb-5">
      <div class="card cards" >
        <div class="card-body card-bodys">
          <h2 class="card-title card-titles">Beneficios</h2>
          <ul class="card-text card-texts">
          <?php foreach ($beneficios as $beneficio) { ?>
                <li><?= $beneficio ?></li>
              <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>

  </div>
</div>


</div>

    

    

    <?php require_once("views/productos/formulario/index.php") ?>

    <?php require_once("views/layouts/footer.php") ?>
    <?php require_once("views/layouts/enlaces.php") ?>
  </body>
</html>