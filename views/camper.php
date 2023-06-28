<?php
include_once("../templates/header.php");
include_once("../templates/sidebar.php");
require_once '../vendor/autoload.php';

use Models\Camper;

$camper = new Camper('mysql');
$dataReg = $camper->getRegiones();
?>
<section id="content">

    <!-- NAVBAR -->
    <?php
    include_once("../templates/navbar.php");
    ?>

    <!-- SECCION MAIN -->
    <main>
        <div class="container w-50">
            <h3>Registro de Campers</h3>
            <form action="../controllers/registrarCamper.php" method="POST">
                <div class="row p-1">
                    <div class="mb-2 col-sm-6 col-md-6">
                        <select class="form-select" aria-label="Default select example" id="tipo-sangre" name="tipo_id">
                            <option selected>Tipo de Documento</option>
                            <option value="CE">Tarjeta de identidad</option>
                            <option value="CC">Cedula de ciudadania</option>
                        </select>
                    </div>
                    <div class="mb-2 col-sm-6 col-md-6 ">
                        <input type="text" placeholder="Numero de Documento" name="idCamper" class="form-control" required>
                    </div>
                </div>
                <div class="row  p-1">
                    <div class="col-sm-12 col-md-12">
                        <label for="birthday" class="form-label"> Fecha de Nacimineto*</label>
                        <input type="date" class="form-control" id="birthday" name="fechaNac">
                    </div>
                </div>
                <div class=" row  p-1">
                    <div class=" col-sm-12 col-md-6 ">
                        <label for="nombres" class="form-label"> Nombres *</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                    <div class=" col-sm-12 col-md-6">
                        <label for="apellidos" class="form-label">Apellidos *</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                </div>
                <div class=" row  p-1">
                    <div class=" mb-2 col-sm-12">
                        <select class="form-select" aria-label="Default select example" id="ciudad" name="region" required>
                            <option selected>Ciudad</option>
                            <?php
                            foreach ($dataReg as $key => $value) { ?>
                                <option value="<?= $value['idReg'] ?>"><?= $value['nombreReg'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                </div>

                <div>
                    <input type="submit" value="Enviar" name="guardar" class="form-control btn btn-success">
                </div>
        </div>
    </main>
</section>
<?php include_once("../templates/footer.php");
?>