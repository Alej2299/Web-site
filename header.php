<?php
// Function to determine active link
function is_active($page_name) {
    $current_file = basename($_SERVER['PHP_SELF'], '.php');
    return ($current_file == $page_name) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Aduanas Rialgava Internacional Nivel 2 S.A.S</title>
    <!-- Favicon -->
    <link rel="icon" href="upload/Favi.png" type="image/png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-contact">
                <span><i class="fa-solid fa-phone"></i> 322 5678626 / 310 2527004</span>
                <span><i class="fa-solid fa-envelope"></i> gerencia@rialgavainternacional.com</span>
            </div>
            <div class="top-bar-social">
                <span><i class="fa-solid fa-location-dot" style="color: var(--secondary-color); margin-right: 5px;"></i> Edificio Lotería del Quindío, Carrera 16 No. 19 - 21, Local 3- Armenia, Quindío.</span>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header>
        <div class="container nav-container">
            <a href="inicio" class="logo">
                <img src="upload/logo-rialgava.png" alt="Logo Rialgava">
            </a>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="inicio" class="<?= is_active('inicio'); ?>">Inicio</a></li>
                    <li><a href="nosotros" class="<?= is_active('nosotros'); ?>">Nosotros</a></li>
                    <li><a href="inicio#servicios">Nuestros Servicios</a></li>
                    
                    <!-- Descargables -->
                    <li class="dropdown">
                        <a href="javascript:void(0);">Talento Humano <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="descargas/PDF/CHECK-LIST-PARA-CONTRATACION-DE-PERSONAL.pdf" target="_blank">Check list para contratacion de personal</a></li>
                            <li><a href="descargas/PDF/REGLAMENTO%20INTERNO%20DE%20TRABAJO%202026.pdf" target="_blank">Reglamento interno de trabajo</a></li>
                            <li><a href="descargas/PDF/CODIGO-DE-ETICA-julio-15-de-2024.pdf" target="_blank">Codigo de etica</a></li>
                            <li><a href="descargas/PDF/MANUAL-DE-POLITICA-ANTICORRUSION-RIALGAVA.pdf" target="_blank">Manual de politica anticorrupción rialgava</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);">Clientes <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="descargas/PDF/CHECK%20LIST%20DOCUMENTOS%20CLIENTES.pdf" target="_blank">Check list documentos cliente</a></li>
                            <li><a href="descargas/PDF/PORTAFOLIO-DE-SERVICIOS-CLIENTES.pdf" target="_blank">Portafolio de servicios clientes</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="galeria" class="<?= is_active('galeria'); ?>">Galería</a></li>
                    <li><a href="contacto" class="<?= is_active('contacto'); ?>">Contacto</a></li>
                    <li><a href="https://wa.me/573212337131" target="_blank" class="btn-contact">¡Contáctanos ya!</a></li>
                </ul>
            </nav>
        </div>
    </header>
