<?php

/**
 *  AtributosMetodos.class [Tipo]
 * Descricao
 * @copyright (c) year, Diego Go
 */
class AtributosMetodos {

    var $Nome;
    var $Idade;
    var $Lingua;

    function setUsuario($Nome, $Idade, $Lingua) {
        $this->Nome = $Nome;
        $this->setIdade($Idade);
        $this->Lingua = $Lingua;
    }

    function showPeople() {
        return "O nome dele é {$this->Nome}";
    }

    function getClasse() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

    function setIdade($Idade) {
        if (!is_int($Idade)):
            die('Idade informada é Invalida');
        else:
            $this->Idade = $Idade;
        endif;
    }
    
    function Envelhecendo(){
        $this->Idade = $this->Idade + 1 ;
    }

}
