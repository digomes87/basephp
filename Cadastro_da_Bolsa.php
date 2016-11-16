<?php

header('Content-Type: text/html; charset=utf-8');


$Bolsa = "Verde";

if(empty($Bolsa)):
    //validando cor da bolsa
    if($Bolsa == 'vermelho'):
        echo "Eita nois comprei a bolsa dela,posso exigir o sexo anal";
    elseif ($Bolsa == 'Preta'):
        echo "Querida bolsa prenta ficaria muito elegante com aquele seu vestido vermelho";
    else:
        echo "Olha minha querida,nao temos mais vermelha e preta,mas tem uma verde que na comic cons seria fantatica !";
    endif;
else:
    echo "É não deu chegamos atrasado,vamos ter que encomendar pela internet !! <br EU TENTEI CARALHO !!!>";
endif;
