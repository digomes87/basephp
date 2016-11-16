<?php
header('Content-Type: text/html; charset=utf-8');

//array relacional,o php adiciona o indice para cada array
$array = ['Developer','Web Designer','Tester','Game Developer'];
var_dump($array);
echo "<hr>";


//varendo o array e imprimindo
foreach ($array as $printR):
    echo "Profissoes registrada: {$printR}<br>";
endforeach;

echo "<hr>";

echo "Arrey associativo: <br>";
//array associativo
$arrAssociativo = [
        "Profissao" => "Web Developer", 
        "Nome" => "Diego Go", 
        "Salario" => 5000,
        "Empresa" => "NylonDev "
    ];
    //rescrevendo o valor do array
$arrAssociativo["Salario"] += 6000; // aqui estou acrescendo + 6000 no salario do Developer
$arrAssociativo["Profissao"] .= " / Manager - {$arrAssociativo['Nome']}";

//strip_tags deve ser usado para evitar insercao de codigo seja realizado
$arrAssociativo = array_map('strip_tags', $arrAssociativo);

//trim deve ser usado para remover espaco em branco
$arrAssociativo = array_map('trim', $arrAssociativo);

var_dump($arrAssociativo);

//extract transforma todos os indices em variaveis,o que é bem util
extract($arrAssociativo);

//com todos os indices transformados em variaveis tenho maior facilidade para imprimir
//Exemplo

echo "Me Chamo {$Nome} sou {$Profissao} e não me leve a mal mas ganho {$Salario}, é pouco eu sei :(";
echo "<hr>";

echo "Multidimensional <br>";
//Array Multimensional que e um array dentro de outro
//por esse fato ele pode carregar mais informacoes
$colaborador = [];
$colaborador[] = ["Nome" => "Diego", "Cargo" => "Developer Php", "Salario" => 7800,"Empresa" => "Nylon"];
$colaborador[] = ["Nome" => "Junior", "Cargo" => "Estagio Php", "Salario" => 1000 ,"Empresa" => "Nylon"];
$colaborador[] = ["Nome" => "Pedro", "Cargo" => "Estagio Designer", "Salario" => 1000 ,"Empresa" => "Nylon"];


foreach ($colaborador as $listColadorador):
    extract($listColadorador);
    echo "O Sr. {$Nome} trabalha como {$Cargo} e ganhando ".  number_format($Salario, 2,',','.' )." por mes <br>";
endforeach;