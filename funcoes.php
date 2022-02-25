<?php

//PARÂMETRO ADICIONAL >>> function cadastraAluno(string $nome, int $matricula = 0):bool {

 /*   
function cadastraAluno(array $nome):bool {

    echo "Aluno {$nome['nome']} cadastrado";

    return true;
}
*/

$aluno = ['nome' => 'Oroch' , 'matricula' => '123123'];

function cadastraAluno(array $aluno):bool {

    $f = fopen('alunos.csv', 'a');
    $escreveu = fwrite($f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
    fclose($f);

    if($escreveu)
        return true;
    else
        return false;
    
}

$funcionou = cadastraAluno(['matricula' => 12244, 'nome' => 'RebecaPrima']);


if($funcionou) 
    echo "<br>Aluno cadastrado com sucesso!";
else
    echo "<br>Erro ao cadastrar o aluno!";


$var = 10;

function soma ($var){
    return $var + 10;
}

echo "<br>Variável antes: $var";

soma($var);

echo "<br>Variável Depois: $var";



?>


