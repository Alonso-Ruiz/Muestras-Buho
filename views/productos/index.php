
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <meta name="keywords" content="Yuntas Producciones, luces led,letrero led, yuntas,pantallas led,calidad de imagen,efectos 3d led,Neon Led,luces navideñas,iluminación led, yuntas producciones,barras luces led, ventilador holografico, holograma 3d, publicidad,marketing, luces led de colores,luces led navidad">

  <link rel="stylesheet" href="public/css/home.css">
  <link rel="stylesheet" href="public/css/csswasap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>YUNTAS</title>
  <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
  <link rel="stylesheet" href="public/css/navbar_categorias.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>

<body class="" style="background: #000000;">
  <?php require_once("views/layouts/navbar.php"); ?>
  <br>
 <br>
 <br>
 <br>
  <div class="container container_banner">
  <div class="carousel slide carousel_home_body" id="carouselExampleIntervals" data-bs-ride="carousel">
      <div class="carousel-inner view_carousel d-flex flex-row ">
        <div class="carousel-item active slide active" data-bs-interval="3000" data-id="1" id="item_img_1">
          <img src="public/img/fondo.webp" alt="slide0">
        </div>
        <div class="carousel-item slide" data-id="2" data-bs-interval="3000" id="item_img_2">
          <img src="public/img/fondo1.webp" alt="slide1">
        </div>
        <div class="carousel-item slide" data-id="3" data-bs-interval="3000" id="item_img_3">
          <img src="public/img/fondo2.webp" alt="slide2">
        </div>
      </div>
      <div class="carousel-indicators m-6 gap-5 position-relative">
        <button type="button" class="buttons_carousel active" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0">
        <img src="public/img/fondo.webp" class="d-block"  alt="slide0" width="80px" height="60px">
        </button>
        <button type="button" class="mx-5 buttons_carousel" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="1" aria-label="Slide 1">
        <img src="public/img/fondo1.webp" class="d-block" alt="slide1" width="80px" height="60px" >
        </button>
        <button type="button" class="buttons_carousel me-5" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="2" aria-label="Slide 2">
        <img src="public/img/fondo2.webp" class="d-block" alt="slide2" width="80px" height="60px" >
        </button>
    </div>
    </div>
    
  </div>
<br>

  <!-- sidebar -->
  
  <div class="container_navbar_categorias container">
    <nav>
      <ul class="ul_categorias">
        <li class="li">
          <a href="producto?slug=Pantalla Led">
            <img width='60' height='50' src="public/img/icons_categorias/001.png" class="img_one" alt="">
            <img width='60' height='50' src="public/img/icons_categorias/10.png" class="img_two" alt="">
            <span>
              Pantallas Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Ventilador holográfico">
            <img width='50' height='50' src="public/img/icons_categorias/002.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/20.png" class="img_two" alt="">
            <span>
              Ventiladores <br>
              Holográficos
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Letreros neón led">
            <img width='50' height='50' src="public/img/icons_categorias/003.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/30.png" class="img_two" alt="">
            <span>
              Letreros Neón <br>
              Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Cubo Led">
            <img width='50' height='50' src="public/img/icons_categorias/004.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/40.png" class="img_two" alt="">
            <span>
              Cubos Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Relojes digitales">
            <img width='100' height='50' src="public/img/icons_categorias/005.png" class="img_one" alt="">
            <img width='100' height='50' src="public/img/icons_categorias/50.png" class="img_two" alt="">
            <span>
              Relojes Digitales
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Letreros led">
            <img width='50' height='50' src="public/img/icons_categorias/006.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/60.png" class="img_two" alt="">
            <span>
              Letreros Led
            </span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- banner -->
  <div class="container container_banner">
    <div class="banner">

    </div>
  </div>

  <div class="container_productos" style="background: #fff;">
    <h1 class="titulos2">
      <span>PRODUCTOS</span>
    </h1>
    <div class="container-sm py-5">
      <div style="margin:0 auto;" class="row">
        <div class="col-lg-4 col-md-6">
          <a href="producto?slug=Letreros neón led" class="item_product position-relative d-block" style="margin-bottom: 20px;">
            <img style="width: 100%;height:308px;padding: 4px;object-fit: cover; border-radius: 30px;" src="views/assets/letrerosneonled.webp" alt="enlaces">
            <span class="more_info position-absolute fs-3 fw-normal" style="background:#3399cca6; visibility:hidden; top:160px; left: calc(50% - 100px);color:#fff; padding: 6px 20px;border-radius: 10px; font-family: sans-serif; font-family: sans-serif">
              Más Infomación
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 18">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
            <h2 class="subtitulo2 position-absolute text-center fs-3 fw-normal" style="bottom: 0px; background:#39c; padding: 10px 4px; color:#fff; width:calc(100% - 8px); margin:0px 4px; border-bottom-left-radius:30px;border-bottom-right-radius:30px">LETREROS NEÓN LED</h2>
          </a>
          <!-- <h2 class="subtitulo2">LETREROS NEÓN LED</h2> -->
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="producto?slug=Letreros led" class="item_product position-relative d-block" style="margin-bottom: 20px;">
            <img style="width: 100%;height:308px;padding: 4px;object-fit: cover; border-radius: 30px;" src="views/assets/letrerosled.webp" alt="enlaces">
            <span class="more_info position-absolute fs-3 fw-normal" style="background:#3399cca6; visibility:hidden; top:160px; left: calc(60% - 150px);color:#fff; padding: 10px 40px;border-radius: 10px; font-family: sans-serif;">
              Más Infomación
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 18">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
            <h2 class="subtitulo2 position-absolute text-center fs-3 fw-normal" style="bottom: 0px; background:#39c; padding: 10px 4px; color:#fff; width:calc(100% - 8px); margin:0px 4px; border-bottom-left-radius:30px;border-bottom-right-radius:30px">LETREROS LED</h2>
          </a>
          <!-- <h2 class="subtitulo2">LETREROS LED</h2> -->
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="producto?slug=Pantalla Led" class="item_product position-relative d-block" style="margin-bottom: 20px;">
            <img style="width: 100%;height:308px;padding: 4px;object-fit: cover; border-radius: 30px;" src="views/assets/pantallasled.webp" alt="enlaces">
            <span class="more_info position-absolute fs-3 fw-normal" style="background:#3399cca6; visibility:hidden; top:160px; left: calc(60% - 150px);color:#fff; padding: 10px 40px;border-radius: 10px; font-family: sans-serif;">
              Más Infomación
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 18">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
            <h2 class="subtitulo2 position-absolute text-center fs-3 fw-normal" style="bottom: 0px; background:#39c; padding: 10px 4px; color:#fff; width:calc(100% - 8px); margin:0px 4px; border-bottom-left-radius:30px;border-bottom-right-radius:30px">PANTALLAS LED</h2>
          </a>
          <!-- <h2 class="subtitulo2">PANTALLAS LED</h2> -->
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="producto?slug=Cubo Led" class="item_product position-relative d-block" style="margin-bottom: 20px;">
            <img style="width: 100%;height:308px;padding: 4px;object-fit: cover; border-radius: 30px;" src="views/assets/cubosled.webp" alt="enlaces">
            <span class="more_info position-absolute fs-3 fw-normal" style="background:#3399cca6; visibility:hidden; top:160px; left: calc(60% - 150px);color:#fff; padding: 10px 40px;border-radius: 10px; font-family: sans-serif;">
              Más Infomación
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 18">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
            <h2 class="subtitulo2 position-absolute text-center fs-3 fw-normal" style="bottom: 0px; background:#39c; padding: 10px 4px; color:#fff; width:calc(100% - 8px); margin:0px 4px; border-bottom-left-radius:30px;border-bottom-right-radius:30px">CUBOS LED</h2>
          </a>
          <!-- <h2 class="subtitulo2">CUBOS LED</h2> -->
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="producto?slug=Ventilador holográfico" class="item_product position-relative d-block" style="margin-bottom: 20px;">
            <img style="width: 100%;height:308px;padding: 4px;object-fit: cover; border-radius: 30px;" src="views/assets/efectos3d.webp" alt="enlaces">
            <span class="more_info position-absolute fs-3 fw-normal" style="background:#3399cca6; visibility:hidden; top:160px; left: calc(60% - 150px);color:#fff; padding: 10px 40px;border-radius: 10px; font-family: sans-serif;">
              Más Infomación
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 18">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
            <h2 class="subtitulo2 position-absolute text-center fs-3 fw-normal" style="bottom: 0px; background:#39c; padding: 10px 4px; color:#fff; width:calc(100% - 8px); margin:0px 4px; border-bottom-left-radius:30px;border-bottom-right-radius:30px">VENTILADORES HOLOGRÁFICOS</h2>
          </a>
          <!-- <h2 class="subtitulo2">EFECTOS 3D LED</h2> -->
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="producto?slug=Relojes digitales" class="item_product position-relative d-block" style="margin-bottom: 20px;">
            <img style="width: 100%;height:308px;padding: 4px;object-fit: cover; border-radius: 30px;" src="views/assets/relojesdigitales.webp" alt="enlaces">
            <span class="more_info position-absolute fs-3 fw-normal" style="background:#3399cca6; visibility:hidden; top:160px; left: calc(60% - 150px);color:#fff; padding: 10px 40px;border-radius: 10px; font-family: sans-serif;">
              Más Infomación
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 18">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
            <h2 class="subtitulo2 position-absolute text-center fs-3 fw-normal" style="bottom: 0px; background:#39c; padding: 10px 4px; color:#fff; width:calc(100% - 8px); margin:0px 4px; border-bottom-left-radius:30px;border-bottom-right-radius:30px">RELOJES DIGITALES</h2>
          </a>
          <!-- <h2 class="subtitulo2">RELOJES DIGITALES</h2> -->
        </div>
      </div>
    </div>
  </div>

  <?php require_once("views/layouts/footer.php") ?>
  
</body>
</html>