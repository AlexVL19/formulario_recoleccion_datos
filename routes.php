<?php
require_once 'controllers/horariosController.php';
require_once 'controllers/citasController.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'obtener_horarios':
            return 'hola';
            break;




        default:
            return  http_response_code(404);
    }
}


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'obtener_horarios':
            $resultado_horarios =  horariosController::getHorarios();

            echo json_encode([
                'horarios' => $resultado_horarios
            ]);
            break;

        case 'obtener_citas':
            $resultado_horarios =  citasController::getCitas();

            echo json_encode([
                'resultados_citas_actuales' => $resultado_horarios
            ]);
            break;



        default:
            return  http_response_code(404);
    }
}
