<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
</head>
<body>
    <h5>CRUD Tarefas</h5>
    <div>
        <form action="gravaTarefa.php" method="post">
            <label for="tarefa">Nova Tarefa</label>
            <input type="text" id="tarefa" name="tarefa">
            <br>
            <input type="submit" value="Gravar">
        </form>
    </div>
    <br>
    <a href="listarTarefa.php">Listar</a>
</body>
</html>