<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./class/ClassesObjetos.class.php');
        require ('./class/AtributosMetodos.class.php');

        $teste = new ClassesObjetos();
        $teste->getClass('Introducao', ' mostrar a classe');
        $teste->verClass();

        $teste->Classe = 'Classe Nova de Buca de indentidade';
        $teste->funcao = 'Busca usuarios no sistema';
        $teste->verClass();



        $testeDois = new AtributosMetodos();
        $testeDoi = $testeDois->setUsuario('Diego', 28, 'POrtugues');
        echo $testeDoi;
        $testeDois->setIdade(28);
        $testeDois->Envelhecendo();
        $testeDois->Envelhecendo();
        $testeDois->getClasse();
        ?>
    </body>
</html>
