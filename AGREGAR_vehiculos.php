<?php

include("Librerias/principalF.php");


plantillaF::aplicar();

$mision =  new stdClass();
$mision->id = '';
$mision->placa = '';
$mision->marca = '';
$mision->comentario = '';
$mision->modelo = '';
$mision->tipo = '';
$mision->lat = '';
$mision->lng = '';


if($_POST){
    $mision = new stdClass();
    $mision->id = $_POST['id'];
    $mision->placa = $_POST['placa'];
    $mision->marca = $_POST['marca'];
    $mision->modelo = $_POST['modelo'];
    $mision->tipo = $_POST['tipo'];    
    $mision->lat = $_POST['lat'];
    $mision->lng = $_POST['lng'];
    $mision->comentario = $_POST['comentario'];

    $misionid = manejador_vehiculos::guardarVehiculos($mision);

    
    plantillaF::aplicar();

    header("Location: vehiculos.php");
    
    

    

}
else{
    if(isset($_GET['id'])){
        $tmp = manejador_vehiculos::vehiculoPorId($_GET['id']);
        if($tmp){
            $mision = $tmp;
            
        } 
    }
} 

?>

<br>
<br>


<h3>Datos del Vehiculo </h3> 
<br>
<form method="post" action="">
<input type="hidden" name= "id" value=" <?= $mision->id; ?>">
<?= asg_input('placa', "Placa", $mision->placa, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('marca', "Marca", $mision->marca, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('modelo', "Modelo", $mision->modelo, ['type' =>'textarea', 'attrs' => 'required']); ?>

<div class="row">
    <div class="col s12" >

        
        <h6>Tipo</h6>
        <br>
        <label>
            <input class="with-gap" required name="tipo" value= "carro " <?= ($mision->tipo == 'carro')?'checked':''; ?> type="radio"  />
            <span>Carro</span>
        </label>
        <label>
            <input class="with-gap" required name="tipo" value= "motocicleta "  <?= ($mision->tipo == 'morocicleta')?'checked':''; ?>  type="radio"  />
            <span>Motocicleta</span>
        </label>
        
        <label>
            <input class="with-gap" required name="tipo" value= "jeepeta " <?= ($mision->tipo == 'jeepeta')?'checked':''; ?> type="radio"  />
            <span>Jeepeta</span>
        </label>
        <label>
            <input class="with-gap" required name="tipo" value= "camioneta "  <?= ($mision->tipo == 'camioneta')?'checked':''; ?>  type="radio"  />
            <span>Camioneta</span>
        </label>
        
       

    </div>

<?= asg_input('comentario', "Comentario", $mision->comentario, ['type'=> 'textarea', 'attrs' => 'required']); ?>
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

