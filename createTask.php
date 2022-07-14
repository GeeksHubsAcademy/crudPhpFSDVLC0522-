<?php
    $server = "db";
    $user = 'root';
    $password = 'root';
    $databaseName = 'fsd_crud_php';
  
    try {
        $connection = new PDO("mysql:host=$server;dbname=$databaseName", $user, $password);

        $title = $_POST['title'];        

        $sql = "INSERT INTO tasks (title) VALUES ('$title')";

        $connection->exec($sql);

        header("Location: ./index.php");
        
    } catch (\Exception $exception) {
        echo 'Error Exception: ' . $exception->getMessage();
    }
?>