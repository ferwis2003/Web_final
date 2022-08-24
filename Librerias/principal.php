<?php

include('plantilla.php');
include('config.php');
include('componentes.php');
include('conexion.php');
include('manejador_misiones.php');
include('manejador_vehiculos.php');
include('manejador_familia.php');







if(!MODO_DESARROLLO){
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}