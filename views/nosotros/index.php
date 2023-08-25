<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="Conoce quienes somos, nuestra misión y visión como empresa con el fin de brindar una buena experiencia al cliente.">
    
    <title >Nosotros</title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    <link rel="stylesheet" href="<?=URL?>public/css/normalize.css">
    <link rel="stylesheet"  href="public/css/nosotros.css">
    <link rel="stylesheet" href="public/css/csswasap.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <?php require_once("views/layouts/enlaces.php") ?>

</head>
<body>
    <?php require_once("views/layouts/navbar.php")?>

    <main class="main">
        <div style="padding: 0.5em; position: relative; top: 10px" class="row only-card">
            <h3>Nuestra misión</h3>
            <div class="text">
                <img src="public/nosotros/Misión.webp" alt="#" class="img-text">
                <p >Buscamos acompañarte en tus ideas más importantes de manera segura para generar 
identidad y valor en tus mejores proyectos, comprometidos con expresar  
autenticidad  iluminando cualquier espacio para tí.</p>
            </div>
        </div>
        <div class="row only-card">
            <h3>Nuestra visión</h3>
            <div class="text">
                <p class="text-justify">Ser lider en el rubro tecnologico y la primera opción para nuestros clientes, 
ofreciendo diversos elementos publicitarios con el fin de contribuir en entregar
productos de calidad expresando innovación cumpliendo con las 
expectativas de nuestros clientes. </p>
                <img src="public/nosotros/Visión.webp" alt="#" class="img-text">
            </div>
        </div>
        <div class="row only-card">
            <h3>Nuestros valores</h3>
            <div class="text">
                <img src="public/nosotros/Valores_11zon.webp" alt="#" class="img-text">
                <p>Confianza, Compromiso y Calidad</p>
            </div>
        </div>
        <div class="row only-card">
            <h3>Nuestros compromisos</h3>
            <div class="row" style="padding: 0;">
                <div class="col-12 col-sm-4 cards">
                    
                    <h4>Confianza</h4>
                </div>
                <div class="col-12 col-sm-4 cards">
                   
                    <h4>Compromiso</h4>
                </div>
                <div class="col-12 col-sm-4 cards">
                    
                    <h4>Calidad</h4>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once("views/layouts/footer.php") ?>
</body>
</html>