<?php
    try {    
        if(isset($_GET['id'])) {
            require('./db.php');

            $idTask = $_GET['id'];
          
            $sql = "DELETE FROM tasks WHERE id = '$idTask'";

            $connection->exec($sql);

            header('location: ./index.php');
        } else {
            echo "No has introducido un id valido";
        }       
    } catch (\Exception $exception) {
        echo 'Error Exception: ' . $exception->getMessage();
    }
?>