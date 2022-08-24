<?php

include("Librerias/principalF.php");


plantillaF::aplicar();

$mision =  new stdClass();
$mision->id = '';
$mision->cedula = '';
$mision->nombre = '';
$mision->apellido = '';
$mision->sexo = '';
$mision->nacimiento = '';
$mision->direccion = '';
$mision->telefono = '';
$mision->email = '';
$mision->estadocivil = '';
$mision->tiposangre = '';
$mision->alergias = '';
$mision->comentario = '';
$mision->estado = '';


if($_POST){
    $mision = new stdClass();
    $mision->id = $_POST['id'];
    $mision->cedula = $_POST['cedula'];
    $mision->nombre = $_POST['nombre'];
    $mision->apellido = $_POST['apellido'];
    $mision->sexo = $_POST['sexo'];    
    $mision->nacimiento = $_POST['nacimiento'];
    $mision->direccion = $_POST['direccion'];
    $mision->telefono = $_POST['telefono'];
    $mision->email = $_POST['email'];
    $mision->estadocivil = $_POST['estadocivil'];
    $mision->tiposangre = $_POST['tiposangre'];
    $mision->alergias = $_POST['alergias'];
    $mision->comentario = $_POST['comentario'];
    $mision->estado = $_POST['estado'];

    $misionid = manejador_familia::guardarFamilia($mision);

    
    plantillaF::aplicar();

    header("Location: integrantes.php");
    
    

    

}
else{
    if(isset($_GET['id'])){
        $tmp = manejador_familia::familiaPorId($_GET['id']);
        if($tmp){
            $mision = $tmp;
            
        } 
    }
} 

?>

<br>
<br>


<h3>Datos de los Integrantes </h3> 
<br>
<form method="post" action="">
<input type="hidden" name= "id" value=" <?= $mision->id; ?>">
<?= asg_input('cedula', "Cedula", $mision->cedula, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('nombre', "Nombre", $mision->nombre, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('apellido', "Apellido", $mision->apellido, ['type' =>'textarea', 'attrs' => 'required']); ?>
<div class="row">
    <div class="col s12" >

        
        <h6>Sexo</h6>
        <br>
        <label>
            <input class="with-gap" required name="sexo" value= "masculino "  <?= ($mision->sexo == 'masculino')?'checked':''; ?>  type="radio"  />
            <span>Masculino</span>
        </label>
        
        <label>
            <input class="with-gap" required name="sexo" value= "femenino " <?= ($mision->sexo == 'femenino')?'checked':''; ?> type="radio"  />
            <span>Femenino</span>
        </label>
        <label>
            <input class="with-gap" required name="sexo" value= "otro "  <?= ($mision->sexo == 'otro')?'checked':''; ?>  type="radio"  />
            <span>Otro</span>
        </label>
        
       

    </div>
<?= asg_input('nacimiento', "Fecha de nacimiento", $mision->nacimiento, ['type' =>'textarea', 'attrs' => 'required']); ?>
<?= asg_input('direccion', "Direccion", $mision->direccion, ['type' =>'textarea', 'attrs' => 'required']); ?>
<?= asg_input('telefono', "Telefono", $mision->telefono, ['type' =>'textarea', 'attrs' => 'required']); ?>
<?= asg_input('email', "Email", $mision->email, ['type' =>'textarea', 'attrs' => 'required']); ?>



<div class="row">
    <div class="col s12" >

        
        <h6>Estado Civil</h6>
        <br>
        <label>
            <input class="with-gap" required name="estadocivil" value= "soltero "  <?= ($mision->estadocivil == 'soltero')?'checked':''; ?>  type="radio"  />
            <span>Soltero/a</span>
        </label>
        
        <label>
            <input class="with-gap" required name="estadocivil" value= "casado " <?= ($mision->estadocivil == 'casado')?'checked':''; ?> type="radio"  />
            <span>Casado/a</span>
        </label>

        
       

    </div>

<?= asg_input('tiposangre', "Tipo de sangre", $mision->tiposangre, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('alergias', "Alergias", $mision->alergias, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('comentario', "Comentario", $mision->comentario, ['type'=> 'textarea', 'attrs' => 'required']); ?>

<div class="row">
    <div class="col s12" >

        
        <h6>Estado </h6>
        <br>
        <label>
            <input class="with-gap" required name="estado" value= "activo "  <?= ($mision->estado == 'activo')?'checked':''; ?>  type="radio"  />
            <span>Activo</span>
        </label>
        
        <label>
            <input class="with-gap" required name="estado" value= "inactivo " <?= ($mision->estado == 'inactivo')?'checked':''; ?> type="radio"  />
            <span>Inactivo</span>
        </label>

        
       

    </div>

<div class="center ">
    <button type= "submit" href="integrantes.php" class= "btn blue-grey darken-1">Guardar</button>
    
    <a href="integrantes.php" onclick="return confirm('Realmente desea cancelar?');" class="btn btn blue-grey darken-1">Cancelar</a>
</div>



</form>

<br/>
<br/>
<br/>
<br/>
<br/> 