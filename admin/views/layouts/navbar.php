<?php if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] != '')) {
    header("Location: http://localhost/YUNTAS_producciones/admin");   
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link rel ="stylesheet" href="public/css/navbarAdmin.css" >
    <link rel="stylesheet" href="public/icons/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
        <nav class="nav-principal">
        <div class="nav-toggle">
            <button id="nav-open-btn" class="nav-open-btn" aria-label="Open navigation menu">
            <span class="hamburger"></span>
            </button>
        </div>
        <div>
                <a href="#" class="logo">
                <img src="public/img/logowhite.webp"  class="logo" alt="Logo">
                </a>
            </div>
        <div class="nav-wrapper">
            
           
            <ul class="nav-menu">
            <li><a href="blog">Administrar Blog</a></li>
            <li><a href="reclamos">Administrar Reclamos</a></li>
            <li><a href="contactanos">Administrar Contactanos</a></li>
            <li><a href="consultas">Administrar Consultas</a></li>
            <li><a href="usuarios">Administrar Usuarios</a></li>
            </ul>
            
        </div>
        <div>
                <a href="cerrarSesion" class="enlace">Cerrar Sesión</a>
            </div>
        </nav>

        <div class="nav-sidebar">
        <div class="nav-sidebar-content">
            <button id="nav-close-btn" class="nav-close-btn" aria-label="Close navigation menu">
            <span class="close-icon">&times;</span>
            </button>
            <ul class="nav-sidebar-menu">
            <li><a href="blog">Administrar Blog</a></li>
            <li><a href="reclamos">Administrar Reclamos</a></li>
            <li><a href="contactanos">Administrar Contactanos</a></li>
            <li><a href="consultas">Administrar Consultas</a></li>
            <li><a href="usuarios">Administrar Usuarios</a></li>
            </ul>
        </div>
        </div>


    <div class="barra-blanca">
        
    </div>
    <script src="public/js/navbarAdmin.js"></script>
</body>
</html>

