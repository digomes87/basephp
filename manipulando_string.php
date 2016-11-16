<?php

header('Content-Type: text/html; charset=utf-8');

$Nome = "Diego Go";

//echo strtoupper($Nome). "<br>";


//Function para mostrar o nome maiusculo
function NameUpper($Nome){
    echo strtoupper($Nome) . "<br>";
}

//function para mostrar o nomes Minusculo
function NameDown($Nome){
    echo strtolower($Nome). "<br>";
}

//function para deixar a primeira letra maiscula,o correto para escrever nome
function NameCorrect($Nome){
    echo ucwords($Nome). "<br>";
}
 

 echo NameUpper('Joao');
 echo NameDown('Diego');
 echo NameCorrect('diego go');
 
 /* esse tipo de tratamento é bem util para tratar nome de imagens ou arquivos antes de realizar o registro no servidor
  * Exemplo IMAGE DE FOTO.jpg o usuario escreve de varias formas o nome do seu arquivo,mas para padronizar e facilitar o provessamento para o sistema
  * e essencial que tratemos o codigo para.
  * Nessa situacao cabe ao desenvolvedor avaliar qual a melhor forma de registro lembrando que registro e exibicao podem ser diferente
  * posso registrar no banco image_de_foto.jpg e exibir para o usuario Image De Foto.jpg
  * 
  */
 
 $img = "IMAGE DE FOTO.jpg";
 $armazenaFoto = strtolower(str_replace(' ', '_', $img));
 //str_replace é uma funcao do php que auxiliar no tratamento do registro o primeiro paramentro passado é o que procuramos, no caso o espaco em branco e no segundo
 // parametro troca por um _ no terceiro definimos qual variavel faremos esse tratamento no caso a $img
 echo $armazenaFoto;
 echo "<hr>";
 
 //Outro exemplo de tratamento de de string agora com numeros
 
 for($i = 1 ; $i <= 10; $i++):
     //aqui pegamos o numero no primeiro parametro e no segundo definimos quantas casa decimais ira aparecer
     //o terceiro é onde queremos que aparece,na direita ou esquerda
     echo str_pad($i, 2, 0, STR_PAD_LEFT)."<br>";
 endfor;
 
 echo "<hr>";
 
 //help to Bart Simpson
 //programa para ajudar o bart a escrever 100 vezes no quadro desculpa
 
 $sorry = "Desculpa Classe";
 echo $cont = str_repeat($sorry, 100);
 echo "<hr>";
 // ou tmb poderiamso fazer assim
 
 for($n = 1 ; $n <= 100 ; $n++):
     echo strtoupper("Desculpa Professora ". $n . "<br>");
 endfor;
 echo "<hr>";
 
 //Pegando o Primeiro nome apenas
 $primeiroNome = "LonderVider Go";
 //DETALHE se usar o substr lembrar que tenho que definir onde comeca e termina o que torna um pouco inutil essa funcao usada para este caso.
 //Existem varios nomes diferentes com diferentes tamanhos
 echo "O primeiro nome e = " . substr($primeiroNome, 0,5);
 echo "<hr>";
 //Dessa forma mudamos um pouco a logica,no exemplo acima contamos as posicoes.
 //agora iremos fazer uso do espaco
 //usando o strpos,passamos no primeiro parametro o nome da variavel e no segundo onde queremos definir que ela acaba,no caso no espaco em branco
 echo substr($primeiroNome, 0 ,  strpos($primeiroNome, ' '));
 echo "<hr>";
 
 //podemos usar este exemplo para pegar extensao do arquivo
 //passar os dois parametros dentro da substr, a variavel e a a definicao
 //se quiser podemos passar mais um parametro para definir onde queremos pegar
 //EXEMPLO
 // substr($img ,strrpos($img, '.') + 1 );   Esse + 1 implica no resultado
 // substr($img ,strrpos($img, '.')); Me retorna .jpg
 // E
 // substr($img ,strrpos($img, '.') + 1); Me retorna jpg
 //diferenca sutil mais util na pesquisa ou registro do documento
 $exemploExtensao = substr($img ,strrpos($img, '.'));
 echo $exemploExtensao;
 