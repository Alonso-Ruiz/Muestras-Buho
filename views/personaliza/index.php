<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Image Slider</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/csswasap.css" >
  <link rel="stylesheet" href="public/css/personaliza.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>
 <?php  require_once("views/layouts/navbar.php");?>
 <body>
      <div class="info">
      <div class="contenedor">
      <div class="contenedor__titulo mt-5">
      <h1 class="tittle">personaliza tu producto</h1>
      <span class="linea"></span>
    </div>
    </div> 
      <div class="slider ">
        <div id="carouselExampleIntervals" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-inner ">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/personaliza/pantalla_led_01.webp" class="d-block w-100" alt="slide0">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/pantalla_led_02.webp" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/pantalla_led_03.jpg" class="d-block w-100" alt="slide2">
            </div>
          </div>
          <div class=" carousel-indicators m-6 gap-5 position-relative">
            <button type="button"  data-bs-target="#carouselExampleIntervals" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"><img src="public/personaliza/pantalla_led_01.webp" class="d-block" height="60px" width="80px" alt="slide0"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="1" aria-label="Slide 1" class="mx-5"><img src="public/personaliza/pantalla_led_02.webp" class="d-block"  height="60px" width="80px" alt="slide1"></button>
            <button type="button" class="me-5" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="2" aria-label="Slide 2"><img src="public/personaliza/pantalla_led_03.jpg" class="d-block" height="60px" width="80px" alt="slide2"></button>
          </div>
        </div>
      </div>
      </div>

      <br>
      </br>
      
      <div class="info1">
      <div class="slider">
        <div id="carouselExampleIntervals1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/personaliza/tiras_led_01.jpg" class="d-block w-100" alt="slide0">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/tiras_led_02.jpeg" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/tiras_led_03.jpg" class="d-block w-100" alt="slide2">
            </div>
          </div>
          <div class="carousel-indicators m-6 gap-5 position-relative">
            <button type="button" data-bs-target="#carouselExampleIntervals1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"><img src="public/personaliza/tiras_led_01.jpg" class="d-block" height="60px" width="80px" alt="slide0"></button>
            <button type="button" class="mx-5" data-bs-target="#carouselExampleIntervals1" data-bs-slide-to="1" aria-label="Slide 1"><img src="public/personaliza/tiras_led_02.jpeg" class="d-block" height="60px" width="80px" alt="slide1"></button>
            <button type="button"  class="me-5" data-bs-target="#carouselExampleIntervals1" data-bs-slide-to="2" aria-label="Slide 2"><img src="public/personaliza/tiras_led_03.jpg" class="d-block" height="60px" width="80px" alt="slide2"></button>
          </div>
        </div>
      </div>
      </div>

      <br>
      </br>
      
      <div class="info">
      <div class="slider">
        <div id="carouselExampleIntervals2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/personaliza/letreros_led_01.jpg" class="d-block w-100" alt="slide0">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/letreros_led_02.webp" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/letreros_led_03.jpg" class="d-block w-100" alt="slide2">
            </div>
          </div>
          <div class="carousel-indicators m-6 gap-5 position-relative">
            <button type="button" data-bs-target="#carouselExampleIntervals2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"><img src="public/personaliza/letreros_led_01.jpg" class="d-block" height="60px" width="80px" alt="slide0"></button>
            <button type="button" class="mx-5" data-bs-target="#carouselExampleIntervals2" data-bs-slide-to="1" aria-label="Slide 1"><img src="public/personaliza/letreros_led_02.webp" class="d-block" height="60px" width="80px" alt="slide1"></button>
            <button type="button" class="me-5" data-bs-target="#carouselExampleIntervals2" data-bs-slide-to="2" aria-label="Slide 2"><img src="public/personaliza/letreros_led_03.jpg" class="d-block" height="60px" width="80px" alt="slide2"></button>
          </div>
        </div>
      </div>
      </div>
      
      <div class="info1">
      <div class="slider">
        <div id="carouselExampleIntervals3" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/personaliza/cubos_led_01.webp" class="d-block w-100" alt="slide0">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/cubos_led_02.png" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/cubos_led_03.jpeg" class="d-block w-100" alt="slide2">
            </div>
          </div>
          <div class="carousel-indicators m-6 gap-5 position-relative">
            <button type="button" data-bs-target="#carouselExampleIntervals3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"><img src="public/personaliza/cubos_led_01.webp" class="d-block" height="60px" width="80px" alt="slide0"></button>
            <button type="button" class="mx-5" data-bs-target="#carouselExampleIntervals3" data-bs-slide-to="1" aria-label="Slide 1"><img src="public/personaliza/cubos_led_02.png" class="d-block" height="60px" width="80px" alt="slide1"></button>
            <button type="button" class="me-5" data-bs-target="#carouselExampleIntervals3" data-bs-slide-to="2" aria-label="Slide 2"><img src="public/personaliza/cubos_led_03.jpeg" class="d-block" height="60px" width="80px" alt="slide2"></button>
          </div>
        </div>
      </div>
      </div>

      <div class="info">
      <div class="slider">
        <div id="carouselExampleIntervals4" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/personaliza/reloj_01.jpg" class="d-block w-100" alt="slide0">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/reloj_02.jpg" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/reloj_03.jpg" class="d-block w-100" alt="slide2">
            </div>
          </div>
          <div class="carousel-indicators m-6 gap-5 position-relative">
            <button type="button" data-bs-target="#carouselExampleIntervals4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"><img src="public/personaliza/reloj_01.jpg" class="d-block" height="60px" width="80px" alt="slide0"></button>
            <button type="button" class="mx-5" data-bs-target="#carouselExampleIntervals4" data-bs-slide-to="1" aria-label="Slide 1"><img src="public/personaliza/reloj_02.jpg" class="d-block" height="60px" width="80px" alt="slide1"></button>
            <button type="button" class="me-5" data-bs-target="#carouselExampleIntervals4" data-bs-slide-to="2" aria-label="Slide 2"><img src="public/personaliza/reloj_03.jpg" class="d-block" height="60px" width="80px" alt="slide2"></button>
          </div>
        </div>
      </div>
      </div>

      <div class="info1">
      <div class="slider">
        <div id="carouselExampleIntervals5" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/personaliza/led_01.jpg" class="d-block w-100" alt="slide0">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/led_02.jpg" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/personaliza/led_03.webp" class="d-block w-100" alt="slide2">
            </div>
          </div>
          <div class="carousel-indicators m-6 gap-5 position-relative">
            <button type="button" data-bs-target="#carouselExampleIntervals5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"><img src="public/personaliza/led_01.jpg" class="d-block" height="60px" width="80px" alt="slide0"></button>
            <button type="button" class="mx-5" data-bs-target="#carouselExampleIntervals5" data-bs-slide-to="1" aria-label="Slide 1"><img src="public/personaliza/led_02.jpg" class="d-block" height="60px" width="80px" alt="slide1"></button>
            <button type="button" class="me-5" data-bs-target="#carouselExampleIntervals5" data-bs-slide-to="2" aria-label="Slide 2"><img src="public/personaliza/led_03.webp" class="d-block" height="60px" width="80px" alt="slide2"></button>
          </div>
        </div>
      </div>
      </div>

    
  </main>
    <div class="info-2 info-2-formulario">
      <p>¿Tienes dudas sobre este producto y deseas tener más información? <br> Solo tienes que completar el siguiente formulario.</p>
      <div class="formulario">
        <img src="public/img/imagen-info.jpg" alt="#">
        <form action="enviarpersonaliza" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col">
              <input name="nom" type="text" class="form-control" id="inputNombre" placeholder="Nombres" aria-label="First name">
            </div>
            <div class="col">
              <input name="ape" type="text" class="form-control" id="inputApellido" placeholder="Apellidos" aria-label="Last name">
            </div>
          </div>
          <div class="mb-6">
            <input name="correo" type="text" class="form-control" id="inputCorreo" placeholder="Correo electrónico">
          </div>
          <div class="mb-6">
            <input name="cel" type="text" class="form-control" id="inputCelular" placeholder="Celular">
          </div>
          <div class="mb-6">
            <textarea name="msg" class="form-control" id="inputMensaje" cols="70" rows="5" placeholder="Mensaje" style="resize: none;"></textarea>
          </div>
          <div class="mb-6">
            <div class="form-file">
              <div class="form-file__action">
                <input name="imagen" type="file" id="image" />
              </div>
              <div class="form-file__result" id="result-image">
                <img id="img-result" alt="" />
              </div>
            </div>
          </div>
          <div class="mb-6">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
      <p>*Una vez enviado el formulario nos estaremos comunicando contigo para hacer valida la promoción*</p>
    </div>
  

</body>
<script src="public/js/productos/main.js"></script>
<?php require_once("views/layouts/footer.php") ?>
</html>