<?php

include("Librerias/Principal.php");

plantilla::aplicar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reportes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Inscriptional+Pahlavi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Calender-Button.css">
    <link rel="stylesheet" href="assets/css/Clean-Button-Scale-Hover-Effect.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Text-Input.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Dark-mode-Index-Table-with-Search-Filters.css">
    <link rel="stylesheet" href="assets/css/MegaMenu2.css">
    <link rel="stylesheet" href="assets/css/Modal-commerce-popup-button-bs4_modal.min.css">
    <link rel="stylesheet" href="assets/css/Modal-commerce-popup-button-styles.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/select2-select2.css">
    <link rel="stylesheet" href="assets/css/Simple-Header-y-Navbar-adaptativo-nav.css">
    <link rel="stylesheet" href="assets/css/Simple-Header-y-Navbar-adaptativo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-swiper.min.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-untitled.css">
</head>

<body >
    <br>
    <br>
    <br>
    <br>
    <div class="blog-slider" style="padding-top: 2px;">
        <div class="blog-slider__wrp swiper-wrapper">
            <div class="blog-slider__item swiper-slide">
                <div></div>
                <div class="blog-slider__img"><img src="assets/img/PDF.png"></div>
                <div class="blog-slider__content"><div class="blog-slider__title">Resumen de mision.</div><div class="blog-slider__text">Aqui les mostrará en un documento pdf los datos de una misión, el presupuesto para la misma, los vehículos involucrados y los integrantes que participaron.
 </div><a class="class=&quot;blog-slider__button" href="mision_ver.php">Ver Mas</a></div>
            </div>
            <div class="blog-slider__item swiper-slide">
                <div></div>
                <div class="blog-slider__img"><img src="assets/img/MAP.png"></div>
                <div class="blog-slider__content"><div class="blog-slider__title">Mapa de los Vehiculos.</div><div class="blog-slider__text">Aqui les mostrara un mapa donde veremos la ubicación de cada uno de los vehículos que hay registrados.</div><a class="class=&quot;blog-slider__button" href="MAPA.php">Ver Mas</a></div>
            </div>
            <div class="blog-slider__item swiper-slide">
                <div></div>
                <div class="blog-slider__img"><img src="assets/img/ZODIACAL.png"></div>
                <div class="blog-slider__content"><div class="blog-slider__title">Reporte de integrantes.</div><div class="blog-slider__text">Aqui les mostrará una lista de todos los integrantes (familia) con su signo zodiacal y edad. </div><a class="class=&quot;blog-slider__button" href="ZODIAC_REPORT.php">Ver Mas</a></div>
            </div>
            <div class="blog-slider__item swiper-slide">
                <div></div>
                <div class="blog-slider__img"><img src="assets/img/rapidos-y-furiosos-sera-estrenada.jpg"></div>
                <div class="blog-slider__content"><div class="blog-slider__title">Cantidad de misiones por integrantes.</div><div class="blog-slider__text">Aqui les mostrará un listado de los integrantes (familia) y la cantidad de misiones que ha realizado. 
</div><a class="class=&quot;blog-slider__button" href="CANT_MISIONES.php">Ver Mas</a></div>
            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Dark-mode-Index-Table-with-Search-Filters-1.js"></script>
    <script src="assets/js/Ludens---1-Dark-mode-Index-Table-with-Search-Filters-2.js"></script>
    <script src="assets/js/Ludens---1-Dark-mode-Index-Table-with-Search-Filters.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/select2-1.js"></script>
    <script src="assets/js/select2-2.js"></script>
    <script src="assets/js/select2-3.js"></script>
    <script src="assets/js/select2-4.js"></script>
    <script src="assets/js/select2-5.js"></script>
    <script src="assets/js/select2-6.js"></script>
    <script src="assets/js/select2.js"></script>
    <script src="assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
</body>

</html>