<?php

//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost'; //localizando o banco de dados para conectar no php 
$user = 'root'; //Username do banco de dados
$pass = '';//password do banco de dados

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
