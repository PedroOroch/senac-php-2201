<?php

require 'conexao.php';

$stmt = $bd->query('SELECT id, nome FROM usuarios');

$stmt->execute();

echo "echo <a href='formUsuario.php'>NOVA USUARIO+</a>
    <form  method='post'>
    
    <table border='1'>
        <tr>
            <td>Email</td><td>Nome</td><td>Senha</td><td></td><td></td>
        </tr>";

while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo "<tr>
            <td>{$reg['id']}</td>
            <td>{$reg['nome']}</td>
            <td><button formaction='editarUsuario.php' name='id' value='{$reg['id']}'>Editar</button></td>
            <td><button formaction='apagaUsuario.php' name='id' value='{$reg['id']}'>Apagar</button></td>
          </tr>";
}

echo "</table></form><br><a href='formUsuario.php'>Voltar</a>";

