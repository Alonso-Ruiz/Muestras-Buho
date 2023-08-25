<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/icons/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header>

        <nav class="nav-principal" style="">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a href="#" class="enlace">
                <img src="public/productos_neon_led/logowhite.webp" alt="" class="logo">
            </a>
            <ul class="menu" id="menu">
                <li id="options"><a class="active" href="main">Inicio</a></li>
                <li><a href="">Nosotros<span class="icon-chevron-small-down icon2"></span></a>

                    <ul class="submenu" id="options" style="z-index: 90;">
                        <li><a href="nosotros"><img src="public/icons/7.png"> Nuesta misión, visión </br> y valores</a>
                        </li>
                        <li><a href="como_llegar"><img src="public/icons/8.png"> Tienda, horarios y </br> zona de
                                cobertura</a></li>
                        <li><a href="historia"><img src="public/icons/9.png"> Historia de Yuntas</a></li>
                    </ul>

                </li>
                <li><a href="productos">Productos<span class="icon-chevron-small-down icon2"></span></a>

                    <ul class="submenu" style="z-index: 90;">
                        <li><a href="producto?slug=Pantalla Led"><img src="public/icons/1-h.png">Pantallas Led</a>

                        </li>
                        <li><a href="producto?slug=Ventilador holográfico"><img
                                    src="public/icons/2-h.png">Ventiladores<br>Holográficos</a>

                        </li>
                        <li><a href="producto?slug=Letreros neón led"><img src="public/icons/3-h.png">Letreros Neon
                                Led</a></li>
                        <li><a href="producto?slug=Cubo Led"><img src="public/icons/4-h.png">Cubos Led</a></li>
                        <li><a href="producto?slug=Relojes digitales"><img src="public/icons/5-h.png">Relojes
                                Digitales</a></li>
                        <li><a href="producto?slug=Letreros led"><img src="public/icons/6-h.png">Letreros Led</a></li>
                    </ul>

                </li>
                <li><a href="personaliza">Personaliza</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contactanos">Contáctanos</a></li>
            </ul>
        </nav>
    </header>
 



</body>

</html>