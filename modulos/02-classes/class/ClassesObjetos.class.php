<?php

/**
 *  ClassesObjetos.class [Tipo]
 * Descricao
 * @copyright (c) year, Diego Go
 */
class ClassesObjetos {

    //Atributos da classe
    var $Classe;
    var $funcao;

    function getClass($Class, $funcao) {
        echo "A classe {$Class} serve para {$funcao}";
    }

    function verClass() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
     function getTeste(){
        return "Aqui {$this->funcao}";
    }
}
