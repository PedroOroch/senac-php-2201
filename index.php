<?php

//Comentário de linha

/*
    Comentário de Bloco
*/

define( 'XPTO' , 'Valor sempre igual' );

echo XPTO;

$num = 2;

$var = '<br>' . "Olá Mundo! $num";// O ponto (" . ") é o operador de concatenção

echo $var;

//echo '<br><br><h1> Café! </h1>';


//var_dump($var);



//phpinfo(); Informações importantes, como variáveis de ambiente

//pós café

/*
Atribuição de váriaveis

$domingo = 'Domingo';
$segunda = 'Segunda-feira';
$terca = 'Terça-feira';
$quarta = 'Quarta-feira';
$quinta = 'Quinta-feira';
$sexta = 'Sexta-feira';
$sabado = 'Sábado';
*/

//atribuição de váriaveis simplicado
$diaSemana = [  'Domingo' , 
                'Segunda-feira' , 
                'Terça-feira',      
                'Quarta-feira', 
                'Quinta-feira', 
                'Sexta-feira', 
                'Sábado'];



$contatos = array 
(   'F' => 'Pai',
    'B' => 'Irmão',
    'C' => 'Primo'
);

echo '<br>Eu tenho um ' . $contatos['C']; // Exemplo sem interpolação

echo "<br>Fulano é meu {$contatos['F']}";//Exemplo com interpolação

/*
$usuario = array (
    'N1' => 'Luiz',
    'N2' => 'Fer',
    'N3' => 'Bono',
    'S1' => '123',
    'S2' => '321',
    'S3' => '627',

);
*/

echo "<br><br><h1>Usuario</h1>";

$usuario[0] = ['nome' => 'Luiz', 
                'senha' => '123'];
$usuario[1] = ['nome' => 'Fer', 
                'senha' => '321'];
$usuario[2] = ['nome' => 'Bono', 
                'senha' => '627'];


$usuario = [[ 'nome' => 'Luiz', 
              'senha' => '123'],
              ['nome' => 'Fer', 
                'senha' => '321'],
                ['nome' => 'Bono', 
                'senha' => '627'];

];
*/

echo "<pre>";
var_dump($usuario);
                

/*
$usuario['Usuário'] = array('[
    {"Nome":"Luis","senha":"123"},
    {"Nome":"Fer","senha":"321"},
    {"Nome":"Bono","senha":627"^}
]',true);

echo "<pre>";
print_r($usuario);
*/

/*
echo '<br>' . $usuario['N1'] . ' ' . $usuario['S1'];
echo '<br>' . $usuario['N2'] . ' ' . $usuario['S2'];
echo '<br>' . $usuario['N3'] . ' ' . $usuario['S3'];
*/


/*
echo "<pre>";

var_dump($contatos);
*/