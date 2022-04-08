<?php

require 'conexao.php'; //solicita um arquivo que tenha o banco de dados conectado

$email = $_POST['email'];//Dado Inseguro
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmacaoSenha = $_POST['confirmacao_senha'];

if($senha != $confirmacaoSenha){
    echo "As duas senhas não batem<br>
        <a href='formUsuario.php'></a>
    ";
    exit();
}

$senha = password_hash($senha, PASSWORD_DEFAULT);

//Código de Segurança
    $stmt = ($bd->prepare("INSERT INTO usuarios(id, nome, senha) VALUES(:id, :nome, :senha)"));//NÃO SE USA ASPAS PARA PREPARAR CONSULTAS

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':senha', $senha);
//Fim do código de segurança

//INSERT
if ($stmt->execute()){
    echo "$usuario gravado com sucesso!";
} else {
    echo "Problema ao gravar $usuario";
}
//FIM
echo "<br>";

echo "<a href='formTarefa.php'>voltar</a>";