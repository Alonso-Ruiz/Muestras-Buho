<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="Conoce quienes somos, nuestra misión y visión como empresa con el fin de brindar una buena experiencia al cliente.">
    
    <title>Nosotros</title>
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

    <div class="main historia">
        <div style="padding: 0.5em; position: relative; top: 20px" class="row only-card">
            <h3>Historia de Yuntas Producciones</h3>
            <img src="#" alt=" ">
        </div>
    </div>

    <div class="como-surgio">
        <div class="como-surgio__content">
            <h3>¿Como surgio Yuntas Producciones?</h3>
            <p>Historia de Yuntas Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quisquam in iste deserunt natus, quibusdam deleniti? Reiciendis accusantium temporibus, nesciunt cum ipsam rem iste omnis veniam beatae inventore, a quaerat.</p>
        </div>
    </div>

    <div class="actualidad">
        <div class="actualidad__content">
            <h3>Yuntas Producciones Actualmente</h3>
            <p>Detalles de actualidad Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quis? Natus, similique! Incidunt, perferendis asperiores distinctio similique dolorum, provident error quis ut iure fugit mollitia doloremque, recusandae voluptatibus eius sequi.</p>
        </div>
    </div>
    
    <?php require_once("views/layouts/footer.php") ?>
</body>
</html>