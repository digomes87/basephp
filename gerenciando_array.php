<?php


header('Content-Type: text/html; charset=utf-8');

//criando um array todo errado para corrigir e enterder o modo correto de usar
$Pessoa['nome'] = "Diego Go";
var_dump($Pessoa);
echo"<hr>";

/*Questao para tomar cuidado 
    No exemplo acima criamos um array e já passamos um nome ao indice no caso nome
 * Se esse exemplo estiver dentro de um if por exemplo cabe comentar que dependo da saida do if esse array pode existir ou nao gerando algum erro no php
 * ja que o php vai indenter em determinado ponto que o array que esta sendo usado nao existe
 * pra exemplificar melhor veja o exemplo abaixo
 *  */

if(1 == 1):
   $Pessoa2['nome'] = "Julia";
endif;
   var_dump($Pessoa2);
//nesse exemplo Julia existe porque na condicao 1 e igual a 1
echo "<hr>";

echo "Leia os comentarios no codigo desse exemplo";
//agora veja o mesmo exemplo com um resultado diferente na condicao
if(1 == 2):
    $Pessoa3['nome'] = "Thiago";
endif;
//var_dump($Pessoa3);
//nesse exemplo vimos umm erro pois a condicao implica na nao criacao do array $Pessoa3 que consequentemente gera o erro
//descomente o var_dump($Pessoa3); para visualizar
echo "<hr>";


$Pessoa4['nome'] = "Loquinho da Programacao <?php ";
$Pessoa4 = array_pad($Pessoa4, 5, null);
var_dump($Pessoa4);

//eliminando indices em branco
$Pessoa4 = array_filter($Pessoa4);
$Pessoa4 = array_map('strip_tags', $Pessoa4);
$Pessoa4 = array_map('trim', $Pessoa4);

var_dump($Pessoa4);

//criando via codigo novo indice no array
array_push($Pessoa4, ['idade' => 28]);

var_dump($Pessoa4);

echo "<hr>";

//abaixo temos dois array distintos
$Empresa['empresa'] = "Nylon Desenvolvimento Tecnologico";
$Empresa['ramo'] = "Tecnologia";

$Funcionario['nome'] = "Diego Go";
$Funcionario['Manager'] = "Mr. Go";

//agora iremos unificar os arrays em uma unica variavel
$dados = array_merge($Funcionario,$Empresa);

var_dump($dados);

extract($dados);
echo $Manager."<hr>";



echo "Extraindo apenas indice do Array";
var_dump(array_keys($dados));
echo "<hr>";
echo "Extraindo apenas valores do array ";
var_dump(array_values($dados));

