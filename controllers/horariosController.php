<?php
include_once "models/citaHorario.php";

class horariosController {
    public static function getHorarios() {
        $result = citaHorario::getHorarios();

        return $result;
    }
}
?>