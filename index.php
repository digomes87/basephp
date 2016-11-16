<?php
ini_set('display_errors', 'On');

#Exibindo todos os erros
error_reporting(E_ALL);

header('Content-Type: text/html; charset=utf-8');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Olá Estamos de volta ao Jogo,like John Wick";

echo "<hr>";


$array = array(
    "ola" => "Oi Gostosao",
    "nome" => "Diego"
);

print_r($array);

var_dump($array);

$numero = 12;
var_dump($numero);