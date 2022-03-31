<?php

$f = fopen('bancodedados.csv','r'); //abre um arquivo

echo "<a href='index.php'>Voltar</a>";

echo "<table border='1'>
        <tr>
            <td>Nome</td><td>Repetições</td>
        </tr>";

while($linha = fgets($f)){ //faz um looping usando informações adquiridas de um arquivo
    
    $campos = explode(';', $linha); //explode divide strings em strings
    $nome = $campos[0];
    $rep = $campos[1];
    echo "<tr>
            <td>$nome</td><td>$rep</td>
          </tr>";
    
}

echo "</table>";