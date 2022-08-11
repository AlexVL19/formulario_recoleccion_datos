<?php

include_once "database/database.php";

class citaBitacora {
    public static function getCitas() {
        $sql = "SELECT id_horario FROM citas_bitacora WHERE fecha_cita = CURDATE()";

        $db = connection::connect();

        $sql = $db->prepare($sql);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>