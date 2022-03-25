<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//Fim Conecta no Banco de Dados

//selecionando um atributo da tabela
$stmt = $bd->query("SELECT id, descricao FROM tarefas");

$stmt->execute();
echo "<table border=1>";
    echo "<tr>";
        echo "
        <td>
            ID
        </td>
        <td>
            Descrição
        </td>";
    echo "</tr>";
while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
        echo "<td>
            {$registro['id']}
        </td>";
        echo "<td>
            {$registro['descricao']}
        </td>";
    echo "</tr>";
}
//Fim selecionar um atributo da tabela
echo "</table>";
