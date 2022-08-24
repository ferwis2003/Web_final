<?php


include("Librerias/principalF.php");


plantillaF::aplicar();

$mision =  new stdClass();
$mision->id = '';
$mision->titulo = '';
$mision->pais = '';
$mision->descripcion = '';
$mision->costo = '';
$mision->fecha = '';
$mision->lat = '';
$mision->lng = '';


if($_POST){
    $mision = new stdClass();
    $mision->id = $_POST['id'];
    $mision->titulo = $_POST['titulo'];
    $mision->pais = $_POST['pais'];
    $mision->descripcion = $_POST['descripcion'];
    $mision->costo = $_POST['costo'];    
    $mision->lat = $_POST['lat'];
    $mision->lng = $_POST['lng'];
    $mision->fecha = $_POST['fecha'];

    $misionid = manejador_misiones::guardarMision($mision);

    plantillaF::aplicar();

    header("Location: misiones.php");

    
    

    

}

?>

<br>
<br>


<h3>Datos de la mision </h3> 
<br>
<form method="post" action="">
<input type="hidden" name= "id" value=" <?= $mision->id; ?>">
<?= asg_input('titulo', "Titulo", $mision->titulo, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('pais', "Pais", $mision->pais, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('descripcion', "Descripcion", $mision->descripcion, ['type' =>'textarea', 'attrs' => 'required']); ?>
<?= asg_input('costo', "Costo", $mision->costo, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('fecha', "Fecha", $mision->fecha, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('lat', "Latitud", $mision->lat, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('lng', "longitud", $mision->lng, ['type'=> 'textarea', 'attrs' => 'required']); ?>

<div class="center ">
    <button type= "submit" href="Misiones.php" class= "btn blue-grey darken-1">Guardar</button>
    
    <a href="Misiones.php" onclick="return confirm('Realmente desea cancelar?');" class="btn btn blue-grey darken-1">Cancelar</a>
</div>



</form>

<br/>
<br/>
<br/>
<br/>
<br/> 

