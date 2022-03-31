<?php

echo "OOOOOlá mundo! Que coisa mais maluca XoX <br><br>";


/*
$usuario['Usuário'] = array('[
    {"Nome":"Luis","senha":"123"},
    {"Nome":"Fer","senha":"321"},
    {"Nome":"Bono","senha":627"^}
     ]',true);

var_dump($usuario); //exibe informações sobre variável

*/
/*

echo "<pre>";
print_r($usuario);

*/



/*
for($i = 1; $i <table 5; $i++){
    echo "Um monte de olá mundo! <br>";
}
*/

$usuario[0] = ['nome' => 'Luiz', 
                'senha' => '123'];
$usuario[1] = ['nome' => 'Fer', 
                'senha' => '321'];
$usuario[2] = ['nome' => 'Bono', 
                'senha' => '627'];

echo '<table border="1">
        <tr>
            <td> ID </td>
            <td> Nome </td>
            <td> Senha </td>
        </tr>';

foreach ($usuario as $id => $value) { //estrutura de repetiçao para vetores
    echo "<tr>";
        echo "<td>";
            echo "$id";
        echo "</td>";
        echo "<td>";
            echo "{$value['nome']}";
        echo "</td>";
        echo "<td>{$value['senha']}</td>";
    echo "</tr>";
}

echo "</table>";


$dias = [ 'Dom' => [ 'Domingo' , 'Domingo'],
          'Seg' => [ 'Segunda' , 'Segunda-feira'],
          'Ter' => [ 'Terça' , 'Terça-feira'],
          'Qua' => [ 'Quarta' , 'Quarta-feira'],
          'Qui' => [ 'Quinta' , 'Quinta-feira'],
          'Sex' => [ 'Sexta' , 'Sexta-feira'],
          'Sab' => [ 'Sábado' , 'Sábado']];

/*
    VERSÃO ANTIGA

    foreach ($dias as $d => $nomeCompleto) {
        echo "$d: {$nomeCompleto[0]} ou {$nomeCompleto[1]}<br>";
    }
*/

foreach ($dias as $d => [$nomeCurto, $nomeLongo]) { //looping para vetores
    echo "$d: $nomeCurto ou $nomeLongo<br>";
}

?>


