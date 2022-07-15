<?php
    try {    
        if(isset($_GET['id'])) {
            require('./db.php');

            $idTask = $_GET['id'];

            $sql1 = "SELECT * FROM tasks WHERE (id=$idTask)";

            $result = $connection->prepare($sql1);
            $result->execute();
            $task = $result->fetch();

            if(!$task) {
                throw new Exception('No existe la tarea que quires eliminar');
            }
          
            $sql2 = "DELETE FROM tasks WHERE id = '$idTask'";

            $connection->exec($sql);

            header('location: ./index.php');
        } else {
            echo "No has introducido un id valido";
        }       
    } catch (\Exception $exception) {
        if($exception->getMessage() === 'No existe la tarea que quires eliminar') {
            echo $exception->getMessage();
        }

        echo 'Error Exception: ' . $exception->getMessage();
    }
?>