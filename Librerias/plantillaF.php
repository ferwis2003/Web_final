<?php

class plantillaF{

    private static $instancia = null;

    static function aplicar(){
        self::$instancia = new plantillaF();

    }

    function __construct(){

        include('Templates/encabezado.php');

    }

    function __destruct(){

        include('Templates/pie.php');

    }
}