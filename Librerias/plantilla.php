<?php

class plantilla{

    private static $instancia = null;

    static function aplicar(){
        self::$instancia = new plantilla();

    }

    function __construct(){

        include('Templates/Header.php');

    }

    function __destruct(){

        include('Templates/pie.php');

    }
}