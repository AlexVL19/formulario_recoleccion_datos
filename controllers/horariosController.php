<?php
include_once "models/citaHorario.php";
include_once "models/citaBitacora.php";

class horariosController {
    public static function getHorarios() {
        $result = citaHorario::getHorarios();

        return $result;
    }





   
}
?>