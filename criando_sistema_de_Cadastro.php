<?php

//Exemplo de validacao de email,programa rotineiro de cadastro de compra


function ValidaEmail($Email){
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
}

$Nome = "Diego Go";
$Email = "developerDiegoGo@Gmail.com";

if(empty($Nome)|| empty($Email)):
    echo "Hey Dude I need of you Email Brow !!";
//validacao se o email e valido
elseif(!ValidaEmail($Email)):
    echo "Hey Dude, seriously, put the correct Email please ! ";
else:
    $Users = [
        'Curso@gmail.com',
        'Aula@Gmail.com',
        'developerDiegoGo@Gmail.com'
    ];
    //validando existencia do email dento da condicao
    if(in_array($Email, $Users)):
        echo "You Was Have register in System, You Want do the Login in System <A href='#'>Sim</a>?";
    else:
        echo "Cadastrado com Sucesso !";
    endif;

endif;