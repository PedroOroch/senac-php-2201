<?php

require 'conexao.php';

$stmt = $bd->query('SELECT id, descricao FROM tarefas');

$stmt->execute();

echo "<a href='formTarefa.php'>NOVA TAREFA+</a>
    <form  method='post'>
    
    <table border='1'>
        <tr>
            <td>ID</td><td>Tarefa</td><td></td><td></td>
        </tr>";

while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo "<tr>
            <td>{$reg['id']}</td>
            <td>{$reg['descricao']}</td>
            <td><button formaction='editarTarefa.php' name='id' value='{$reg['id']}'>Editar</button></td>
            <td><button formaction='apagaTarefa.php' name='id' value='{$reg['id']}'>Apagar</button></td>
          </tr>";
}

echo "</table></form><br><a href='formTarefa.php'>Voltar</a>";

