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

    $f = fopen('alunos.csv', 'a'); //abre um arquivo
    $escreveu = fwrite($f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");//escreve codigo da string para o arquivo
    fclose($f);//fecha um arquivo

    if($escreveu)//estrutura condicional dizendo se variavel escreveu ou nao no caso
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


