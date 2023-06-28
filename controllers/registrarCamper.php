<?php 

require_once '../vendor/autoload.php';

use Models\Camper;

$camper = new Camper('mysql');

if(isset($_POST['guardar'])){
    $camper->setIdCamper($_POST['idCamper']);
    $camper->setNombreC($_POST['nombres']);
    $camper->setApellidoC($_POST['apellidos']);
    $camper->setFechaNac($_POST['fechaNac']);
    $camper->setIdReg($_POST['region']);

    $camper->registarCamper();
}
?>
<script>
    document.location= '../views/camper.php';
</script>


