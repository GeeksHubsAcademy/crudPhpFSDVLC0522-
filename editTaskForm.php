<?php

    $server = "db";
    $user = 'root';
    $password = 'root';
    $databaseName = 'fsd_crud_php';

    try {
        $connection = new PDO("mysql:host=$server;dbname=$databaseName", $user, $password);
        
        $idTask = $_GET['id'];

        $sql = "SELECT * FROM tasks WHERE (id=$idTask)";

        $result = $connection->prepare($sql);

        $result->execute();

        $task = $result->fetch(PDO::FETCH_OBJ);


        // $result = $connection->pr
    } catch (\Exception $exception) {
        echo 'Error Exception: ' . $exception->getMessage();
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateTask.php" method="post">
        <input type="text" name="title" value="<?php echo $task->title; ?>">
        <input type="submit" value="Actualizar tareas" name="submit">
    </form>
</body>
</html>