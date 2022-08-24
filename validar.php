<?php
$usuario=$_POST['nombre'];
$pass=$_POST['pass'];

session_start();
$_SESSION['nombre']= $usuario;

include('bd.php');

$consulta ="SELECT * FROM usuarios  WHERE nombre = '$usuario' AND pass = '$pass'";
$resultado= mysqli_query($conexion,$consulta );

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:Inicio.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h2 class= "bad"> ERROR DE AUTENTICACION</h2>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);