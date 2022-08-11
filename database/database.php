<?php

class connection {

    public static function connect() {
        $connect = new PDO ('mysql:host=192.168.100.75:3307;dbname=formulario_recoleccion_datos', "root" , "V1talR/*emo214noruegacamilo");

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connect;
    }
}
?>