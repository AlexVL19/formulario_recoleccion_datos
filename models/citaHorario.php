<?php
include_once "database/database.php";

class citaHorario {
    public static function getHorarios() {
        $sql = "SELECT horario, id FROM citas_horarios";

        $db = connection::connect();

        $sql = $db->prepare($sql);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>