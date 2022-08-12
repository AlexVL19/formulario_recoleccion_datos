<?php
require __DIR__.'../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createMutable(__DIR__.'../../');
$dotenv->load();


class connection {

    public static function connect() {
        $connect = new PDO ('mysql:host='.$_ENV['DATABASE_HOST'].':'.$_ENV['DATABASE_PORT'].';dbname='.$_ENV['DATABASE_NAME'],$_ENV['DATABASE_USER']  ,$_ENV['DATABASE_PASSWORD'] );

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connect;
    }
}
?>