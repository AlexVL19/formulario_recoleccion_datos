<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>Citaciones</title>

</head>

<body>


    <div style="width:100%;display:flex;justify-content:center;padding:5px">
        <div class="card col-12" style="padding:10px;">
            <div style="min-height:300px;">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="col-4">
                    <table class="table" style="width:100%;text-align:center;">
                        <thead>
                            <tr>
                                <th scope="col">Horas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once "controllers/horariosController.php";
                                include_once "controllers/citasController.php";

                                $citas_resultado = citasController::getCitas();

                                $citas_actuales = [];
                                $horarios_actuales = [];

                                if (count($citas_resultado) != 0) {
                                    foreach($citas_resultado as $cita) {
                                        array_push($citas_actuales, $cita['id_horario']);
                                    }
                                }
                                $result = horariosController::getHorarios();
                                if (count($result) != 0) {
                                    foreach($result as $horario) {
                                        array_push($horarios_actuales, $horario['id']);
                                        
                                    }
                                }

                                $horarios_desactivados = [];

                                foreach($citas_actuales as $cita) {
                                    if (in_array($cita, $horarios_actuales)) {
                                        array_push($horarios_desactivados, $cita);
                                    }
                                }

                                foreach($result as $horario) {

                            ?>

                            <tr onclick="show(this)" class="horario <?php if (in_array($horario['id'], $horarios_desactivados)) {
                                echo " desactivado-horario";
                            }?> ">
                                <th scope="row"><?php echo $horario['horario'] ?></th>
                            </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    ?>

    <form id="modal" class="modal2 inactivo">
    <div class="mb-3">
        <label class="form-label">Cédula</label>
        <input type="number" class="form-control" id="cedula" name="cedula">
    </div>
    <div class="mb-3">
        <label class="form-label">Empresa</label>
        <input type="text" class="form-control" id="empresa" name="empresa">
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>

</body>

<script src="js/index.js"></script>

</html>