<?php

require 'conexao.php'; //solicita um arquivo que tenha o banco de dados conectado

$tarefa = $_POST['tarefa'];//Dado Inseguro

//Código de Segurança
    $stmt = ($bd->prepare("INSERT INTO tarefas (descricao) VALUES(:tarefa)"));//NÃO SE USA ASPAS PARA PREPARAR CONSULTAS

    $stmt->bindParam(':tarefa', $tarefa);
//Fim do código de segurança

//INSERT
if ($stmt->execute()){
    echo "$tarefa gravada com sucesso!";
} else {
    echo "Problema ao gravar $tarefa";
}
//FIM
echo "<br>";

echo "<a href='formTarefa.php'>voltar</a>";