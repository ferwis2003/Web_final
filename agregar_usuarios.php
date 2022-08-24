<?php


include("Librerias/principalF.php");


plantillaF::aplicar();

$mision =  new stdClass();
$mision->id = '';
$mision->correo = '';
$mision->nombre = '';
$mision->pass = '';


if($_POST){
    $mision = new stdClass();
    $mision->id = $_POST['id'];
    $mision->correo = $_POST['correo'];
    $mision->nombre = $_POST['nombre'];
    $mision->pass = $_POST['pass'];


    $misionid = manejador_usuarios::guardarUsuario($mision);

    plantillaF::aplicar();

    header("Location: Usuarios.php");

    
    

    

}
else{
    if(isset($_GET['id'])){
        $tmp = manejador_usuarios::usuarioPorId($_GET['id']);
        if($tmp){
            $mision = $tmp;
            
        } 
    }
} 

?>

<br>
<br>


<h3>Datos del Usuario</h3> 
<br>
<form method="post" action="">
<input type="hidden" name= "id" value=" <?= $mision->id; ?>">
<?= asg_input('correo', "Correo", $mision->correo, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('nombre', "Nombre", $mision->nombre, ['type'=> 'textarea', 'attrs' => 'required']); ?>
<?= asg_input('pass', "Contraseña", $mision->pass, ['type' =>'textarea', 'attrs' => 'required']); ?>


<div class="center ">
    <button type= "submit" href="Usuarios.php" class= "btn blue-grey darken-1">Guardar</button>
    
    <a href="Usuarios.php" onclick="return confirm('Realmente desea cancelar?');" class="btn btn blue-grey darken-1">Cancelar</a>
</div>



</form>

<br/>
<br/>
<br/>
<br/>
<br/> 

