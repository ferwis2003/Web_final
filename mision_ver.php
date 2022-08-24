<?php


include("Librerias/principal.php");



plantilla::aplicar();

$caso = false;

if(isset($_GET['id'])){
    $tmp = manejador_misiones::misionPorId($_GET['id']);
    if($tmp){
        $caso = $tmp;

    } else if($_GET['id'] > 0  ){
        header("Location: misiones.php");

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Misiones</title>
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
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <div class="container-fluid" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <br>
                <h1>Misiones:</h1>
            </div>
        </div>
        <div class="card" id="TableSorterCard" style="border-style: none;border-radius: 6.5px;"></div>
    </div>
    <div class="col-md-12 search-table-col" style="margin-top: -44px;">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.." style="margin-top: 14px;"></div><span class="counter pull-right"><a class="btn btn-primary" role="button" style="border-radius: 48px;font-size: 26px;background: rgb(28,119,252);font-family: 'Noto Sans Inscriptional Pahlavi', sans-serif;font-weight: bold;width: 63.75px;border-width: 0px;padding-top: 12px;" href="AGREGAR_misiones.php">+</a></span>
        <div class="table-responsive table table-hover table-bordered results">
            <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd-1" class="col-lg-1" style="width: 436.344px;">ID</th>
                        
                        <th id="trs-hd-2" class="col-lg-2" style="width: 364.109px;">Título</th>
                        <th id="trs-hd-3" class="col-lg-3" style="width: 558.953px;">País</th>
                        <th id="trs-hd-4" class="col-lg-2" style="width: 481.156px;">Descripción</th>
                        <!-- <th id="trs-hd-7" class="col-lg-2" style="width: 94.016px;">Vehículos</th>
                        <th id="trs-hd-6" class="col-lg-2" style="width: 236.484px;"><br><strong>Integrantes</strong><br></th> -->
                        <th id="trs-hd-5" class="col-lg-2" style="width: 350.156px;"><br><strong>Costo</strong><br></th>
                        <th id="trs-hd-1" class="col-lg-1" style="width: 436.344px;">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                
                    $mision = manejador_misiones::listaMisiones(); 
                    foreach($mision as $misio){
                    echo"
                    <tr>
                        <td>{$misio->id}</td>
                        <td>{$misio->titulo}</td>
                        <td>{$misio->pais}</td>
                        <td>{$misio->descripcion}</td>
                        <td>{$misio->costo}</td>
                        
                        

                        <td>{$misio->fecha}</td>
                
                
                
                    </tr>
            
                    ";
                }
        

                ?>
            </tbody>

   
        </table>

        <div class="center">
            <div class="col-md-12 content-center"><button class="btn btn-primary form-btn btn noprint" onclick="print();" type="submit"><i class="far fa-save"></i>&nbsp; IMPRIMIR </button>
        </div>

        <br>
        


        </div>
    </div>

<br/>



<br/>
                
           
     
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
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>