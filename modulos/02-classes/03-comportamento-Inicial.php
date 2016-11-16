<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             require('./class/ComportamentoInicial.class.php');
             $Azul = new ComportamentoInicial('Azul', 'large', 'Sim', 2);
             $Amarelo = new ComportamentoInicial('Amarelo', 'Amarelo Sol', 'Sim', 10);
             $Vermelho = new ComportamentoInicial('Vermelho', 'Sangue', 'Não', 0);
             
             $Azul->ver();
             $Amarelo->ver();
             $Vermelho->ver();
        ?>
    </body>
</html>
