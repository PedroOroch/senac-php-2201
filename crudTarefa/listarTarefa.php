<?php

require 'conexao.php';

$stmt = $bd->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado = 0');

$stmt->execute();

echo "<a href='formTarefa.php'>NOVA TAREFA+</a>
    <form  method='post'>
    
    <table border='1'>
        <tr>
            <td>ID</td><td>Tarefa</td><td></td><td></td>
        </tr>";

while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){

    $img = 'N/D';

    if(!empty($reg['imagem'])){
        if(is_file($reg['imagem'])){}
            $img = "<img src='{$reg['imagem']}' width='50' height='50'>";
    }

    echo "<tr>
            <td>{$reg['id']}</td>
            <td>{$reg['descricao']}</td>
            <td>$img</td>
            <td><button formaction='editarTarefa.php' name='id' value='{$reg['id']}'>Editar</button></td>
            <td><button formaction='apagaTarefa.php' name='id' value='{$reg['id']}'>Apagar</button></td>
          </tr>";
}

echo "</table></form><br><a href='formTarefa.php'>Voltar</a>";

