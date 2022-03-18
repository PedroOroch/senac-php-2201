<?php

//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//Fim Conecta no Banco de Dados

//INSERT
$inseriu = $bd->exec('INSERT INTO 
                        tarefas (descricao) 
                      VALUES 
                        ("Tarefa inserida via PHP")');
//FIM

if($inseriu)
    echo "GRAVOU!";
else 
    echo "RATINHOOOO RAPAAAZ IIIIRRAAAAA EEEESSSE E MEU PATRAAAAO RAAAATINHOOOOO!";


//DELETE    
$deletou = $bd->exec('DELETE FROM 
                        tarefas 
                      WHERE 
                         id = 20');

if($deletou)
    echo "<br>APAGOU!";
else 
    echo "<br>RATINHOOOO RAPAAAZ IIIIRRAAAAA EEEESSSE E MEU PATRAAAAO RAAAATINHOOOOO!";
