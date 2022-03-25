<?php

//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//Fim Conecta no Banco de Dados


//ATUALIZAR UM REGISTRO
$att = $bd->exec('UPDATE  
                    tarefas 
                  SET 
                    id = 38 , descricao = "BITE THE DUST"
                  WHERE 
                    id = 121');

if($att)
    echo "ATUALIZOU!";
else 
    echo "RATINHOOOO RAPAAAZ IIIIRRAAAAA EEEESSSE E MEU PATRAAAAO RAAAATINHOOOOO!";
