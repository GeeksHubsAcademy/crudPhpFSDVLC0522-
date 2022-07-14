<?php
    $server = "db";
    $user = 'root';
    $password = 'root';
    $databaseName = 'fsd_crud_php';

    try {
        $connection = new PDO("mysql:host=$server;dbname=$databaseName", $user, $password);
        echo "Conexión establecida con éxito";        
    } catch (\Exception $exception) {
        echo 'Error Exception: ' .$exception->getMessage();
    }
