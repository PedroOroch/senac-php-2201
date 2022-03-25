<?php

require 'conexao.php';

$stmt = $bd->query('SELECT id, descricao FROM tarefas');

$stmt->execute();

echo "<table border='1'>
        <tr>
            <td>ID</td><td>Tarefa</td>
        </tr>";

while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo "<tr>
            <td>{$reg['id']}</td>
            <td>{$reg['descricao']}</td>
          </tr>";
}

echo "</table><br><a href='formTarefa.php'>VOltar</a>";