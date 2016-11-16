<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-Type: text/html; charset=utf-8');


//Funcion para automatizar tabuada
//Lembrar que uma funcao existe para evitar repeticao de codigo
//nao esqueca de chamar  funcao uando necessaria


function tabuada(){
    echo "<br> Tabuada do 5:<br>";
    for($x = 1 ;$x <= 10; $x++):
        echo "5 x {$x} = " .$x * 5 ."<br>";
    endfor;
    echo "<hr>";
}

echo tabuada();

//echo "<======================== Minha Tabuada ======================================>";
function minhaTabuada($num){
    echo "<======================== Tabuada do {$num} ======================================>";
    echo "<br> Tabuada do {$num}:<br>";
    for($x = 0 ;$x <= 10; $x++):
        echo "{$num} x {$x} = " .$x * $num ."<br>";
    endfor;
    echo "<hr>";
}

echo minhaTabuada(13);
echo minhaTabuada(27);
echo minhaTabuada(113);