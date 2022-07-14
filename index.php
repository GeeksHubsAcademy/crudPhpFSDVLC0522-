<?php
    try {
        require('./db.php');

        $sql = "SELECT * FROM tasks";

        $result = $connection->prepare($sql);

        $result->execute();

        $tasks = $result->fetchAll();        
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
    <h1>Crear Tarea:</h1>
    <form action="createTask.php" method="post">
        <p>Title: <input type="text" name="title" /></p>
        <p><input type="submit" value="Enviar"/></p>
    </form>

    <h1>Listado de tareas</h1>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <button><a href="./editTaskForm.php?id=<?php echo $task['id']; ?>">Edit task</a></button>
                <?php echo $task['id']; ?> - <?php echo $task['title']; ?>
            </li>
        <?php endforeach;?>

    </ul>
</body>

</html>