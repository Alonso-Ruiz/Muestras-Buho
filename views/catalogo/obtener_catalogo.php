<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="public/css/productos.css" >
    <link rel="stylesheet" href="public/css/csswasap_copy.css" >
      <meta name="description" content="En Yuntas Producciones te brindamos la oportunidad que personalizes tu producto. Contactanos y te daremos la informaci��n necesaria">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Catálogo</title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">

    <style>
        .container-copy{
            background-color: #df02f1;
            height: 150px;
            display:flex;
    justify-content: center;
    align-items: center;
        }
        .underline{
            text-decoration:underline;
        }

       .img-d{
        width: 200%;
        height: 350px;
        border-radius: 10px;
       

       }
       p1{
           color: rgb(181 53 244);
           width: 200px;
       }
       h2{
        color: rgb(181 53 244);
       }
       .texto-color{
           color: #fff;
       }
       .fondo-color{
           background-color: #fff;
           
       }
       .nobackground{
           background-image:none;
       }
       .ancho{
           width: 100%;
       }
       .container__gallery{
           margin:0 auto;
           margin-top:50px;
           margin-bottom:50px;
           max-width:1200px;
           display:flex;
         width:90%;
            justify-content: space-evenly;
            gap:50px
       }
       .container__form{
           width:90%;
            display:flex;
            justify-content: space-evenly;
             margin:0 auto;
           margin-top:50px;
           margin-bottom:50px;
           max-width:1200px;
       }
       .form__picture{
           width:45%;
           display: flex;
           align-items: center;
       }
       .form__control{
           width:45%;
           text-align:left;
       }
       .form__imgg{
          width:100%;
           height:75%;
           object-fit: cover;
       }
       .gallery__picture{
           width:30%;
       }
       .gallery__img{
           width:100%;
           height:100%;
           border-radius: 10px;
           border: 3px solid #df02f1;
       }
       .form-control{
           background-color: #39c !important;
           border:none !important;
           border-radius:0 !important;
       }
       .form-label{
           padding:0 !important;
           padding-top:20px !important;
       }
       .text--color{
         color: #000!important;
       }
       @media (min-width: 1024px) { 
            .ancho{
                width: 75%;
            }
        }
        @media screen and (max-width: 780px) {
            .container__form{
                flex-wrap: wrap;
            }
            .form__control{
           width:90%;   
            }
            .form__picture{
            width:90%;
           }
        }
        @media screen and (max-width: 560px) {
            .container__gallery{
                flex-wrap: wrap;
            }
            .gallery__picture{
                 width:85%;
                 max-width: 400px;
            }
        }
        
    </style>
<?php require_once("views/layouts/enlaces.php") ?>
</head>

<body class="fondo-color nobackground">
    <?php require_once("views/layouts/navbar.php") ?>
    
   
        <div class="bannercatalogo">
        </div>
        <div class="catalogoo">
            <div class="catalogoT">
                <h1>OBTÉN TU CATÁLOGO</h1>
            </div>
        </div>
         <div class="container__form">
              <figure class="form__picture"> <img class="form__imgg" src="public/catalogo/catalogo2.webp" alt="imagen neon"></figure>
              <form  class="form__control row" action="<?php echo constant('URL')?>enviar_mail" method="post" class="formulario">
                   <label for="nombre" class="form-label texto-color fw-bold text--color"><h3>NOMBRE*</h3></label>
                  <input type="text" class="form-control form__input" id="nombre" aria-describedby="emailHelp" name="nombre">
                  <label for="telefono" class="form-label texto-color fw-bold text--color"><h3>NÚMERO DE CELULAR*</h3></label>
                <input type="text" class="form-control form__input" id="telefono" aria-describedby="emailHelp" name="telefono">
                   <label for="email" class="form-label texto-color fw-bold text--color"><h3>EMAIL*</h3></label>
                 <input type="email" class="form-control form__input" id="email" aria-describedby="emailHelp" name="email">
                 <input type="submit" name="enviar" style="color: #fff; background-color:rgb(181 53 244);" class="btn w-25  my-3 d-block mx-auto" value="ENVIAR">
              </form>
         </div>

    <?php require_once("views/layouts/footer.php") ?>
</body>

</html>