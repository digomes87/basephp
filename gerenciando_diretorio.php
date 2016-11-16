<?php
header('Content-Type: text/html; charset=utf-8');

/*
*  Verificando se existe diretorio e ou arquivos
*/

function checkDir($Dir){
    if(file_exists($Dir) && is_dir($Dir)):
        return true;
    else:
        return false;
    endif;
}

//pegando o caminho do diretorio com funcao getcwd
$getDir = getcwd();
echo $getDir."<hr>";

//comando set é para onde queremos ir
$setDir = "{$getDir}/imagens";

if(!checkDir($setDir)):
    mkdir($setDir, 0777);
endif;

//tanto para criacao quanto exclusao de arquivo ou diretorio demanda de verificacao primeiro

if(checkDir($setDir)):
   // rmdir($setDir, 0777);
endif;


//listado arquivos
$openDir = opendir($setDir);
while($File = readdir($openDir)):
    if($File != '.' && $File != '..'):
        echo "<img src='imagens/{$File}'/> ";
        //echo "{$File}<br>";
    endif;
endwhile;
