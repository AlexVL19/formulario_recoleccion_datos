<?php
include_once "models/citaBitacora.php";

class citasController {
    public static function getCitas() {
        $result = citaBitacora::getCitas();

        return $result;
    }
}
?>