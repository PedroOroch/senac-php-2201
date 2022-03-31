<?php


$usuario = $_POST['usuario']; //$_POST pega informações inseridas num formulario html pelo method=post
$valor = $_POST['numero'];

echo "$usuario, seja bem-vindo(a)! <br>";//exibe uma ou mais strings


for ($i = 0; $i < $valor; $i++) {
    echo "$usuario<br>";

    if ($i > 1000) break;
}
 
//grava no arquivo
$f = fopen('bancodedados.csv','a'); //abrir um arquivo
fwrite($f, "$usuario;$valor\r\n"); //escrever no arquivo
fclose($f);//fecha o arquivo

