<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             require('./class/ReplicaEClonagem.class.php');
             $readA = new ReplicaEClonagem("post", "categoria = 'noticias'", "ORDER BY data DESC");
             $readA->Ler();
             
             $readA->setTermos("categoria = 'internet'");
             $readA->setTabela("publicacao");
             $readA->Ler();
             
             $readB = clone($readA);
             $readB->setTermos("categoria = 'radio/tv'");
             $readB->setTabela("publicados");
             $readB->Ler();
             
             
        ?>
    </body>
</html>
