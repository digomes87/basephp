<?php
header('Content-Type: text/html; charset=utf-8');


require 'classeExemplo/MinhaClasse.php';
require 'classeExemplo/SegundaClasse.php';


$Nome = new SegundaClasse;

$Nome->setNome('Proprietario Diego Go');
$Nome->setEmpresa('Nylon Tecnology');
$Nome->setRamo('Tecnology E Inovation');
$Nome->setIdade(28);

var_dump($Nome);

var_dump(get_class_methods('MinhaClasse'));
var_dump(get_class_vars('MinhaClasse'));
var_dump(get_class($Nome));
var_dump(get_parent_class($Nome));