<?php


$usuario = $_POST['usuario'];
$valor = $_POST['numero'];

echo "$usuario, seja bem-vindo(a)! <br>";


for ($i = 0; $i < $valor; $i++) {
    echo "$usuario<br>";

    if ($i > 1000) break;
}
 
//grava no arquivo
$f = fopen('bancodedados.csv','a');
fwrite($f, "$usuario;$valor\r\n");
fclose($f);

