<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/html; charset=utf-8');

//WHILE enquanto acontecer

$i = 1;


while($i <= 10):
    echo "{$i} x 8 = " .$i * 8 ."<br>";
    $i++;
endwhile;


echo "<hr>";
//FOR:  execute x vezes

for ($e = 1; $e <= 10; $e++):
    echo "{$e} x 8 = " .$e * 8 ."<br>";
    
endfor;

echo "<hr>";

//FOREACh: estrutura de repeticao de array

$arr = ['Developer','Web Designer', 'Motorista', 'Estudante'];
//nesse caso usar o echo resultaria em erro pois o php nao permite
//entao se faz o uso do foreach que percorre tudo que existe no array armazena em uma variavel

foreach ($arr as $imprimeArr):
    echo "Profissoes que existem na casa {$imprimeArr} <br>";
endforeach;

//imprimindo indice e valor

$arrName = ['Nome' => 'Diego','Idade' => 28];
echo $arrName['Nome'] .'<br>';
foreach ($arrName as $indice => $v):
    echo "{$indice} = {$v} <br>";
endforeach;