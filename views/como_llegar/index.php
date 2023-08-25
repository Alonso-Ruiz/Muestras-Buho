<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="Ubicanos en Urb. Alameda la rivera Mz F Lt 30, Ate 15001. Siguenos en nuestras redes sociales: Facebook, Instagram, TikTok">
    <link rel="stylesheet" href="<?=URL?>public/css/presupuesto.css">
    <link rel="stylesheet" href="public/css/csswasap_copy.css" >
    <title>¿CÓMO LLEGAR?</title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    <?php require_once("views/layouts/enlaces.php") ?>
    
    
        
</head>

<body>

    <?php require_once("views/layouts/navbar.php") ?>
    <br><br><br>
    

    <section style="background: #000;padding: 1rem; height: auto;">
       <h2 class="text-light p-3" style="color:#fff;font-weight: 700; font-size: 35px;text-align: center;text-decoration: underline #02a5f1; padding: 0.5em; position: relative; top: 20px"> Tienda, Horario y zona de cobertura</h2>

       <div style="display: auto;font-size: 2rem;color:#fff; ">
           <p>Nos puedes en contrar en: Jr.Paruro 1401 Tda. 130 Sótano, CC Shopping Center, Cercado de Lima.<br>Nuestro horario es de Lunes-Viernes 9:00 a.m. - 6:00 p.m.<br><br> A continuación, podras ubicarnos en el siguiente mapa, solo dando clik en el icono de:  </p>
       </div>
        
            
        <div class ="d-flex justify-content-center py-5">
        <figure class="overflow-hidden mapa">
            <p style="background:#02a5f1;color:#fff;font-weight: 700; font-size: 23px;padding-left: 2.5rem;padding-top: 0.8rem; height: 5rem;"> Yuntas Producciones</p>
            <a href="https://www.google.com/maps/place/Yuntas+Producciones/@-12.0292327,-76.9261273,13.75z/data=!4m5!3m4!1s0x9105c97c8934a213:0x7f6ccb249e86b5e6!8m2!3d-12.0256319!4d-76.9414459?hl=es-ES" aria-label="ubicacion de la tienda" target="_blank" >
                <img src="public/nosotros/maps.webp" alt="ubicacion en el mapa" class="img-mapa">
            </a>
        </figure>
        </div>
    </section>

    <?php require_once("views/layouts/footer.php") ?> 
</body>



 <style>
    
        .enlace {
            left: 0;
        }

        .container-copy{
            background-color: #02a5f1;
            height: 150%;
            width: 100%;
            display:flex;
            font-size: 400%;
            font-weight:bold;
            font-family: 'fantasy';
                
        }
        .titulo{
            font-size:500%;
            font-family: 'Coda Caption', sans-serif;
            font-weight:bold;
            color: #fff;
        }
    
        @media (max-width: 650px){
            .titulo-modify{
                width: 90%;
                font-family: 'Coda Caption', sans-serif;
                font-size: 250%;
                margin:10px auto;
                font-weight:bold;
                color: #fff;
            }
        }
</style>

</html>