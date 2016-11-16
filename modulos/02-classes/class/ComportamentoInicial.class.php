<?php

/**
 *  ComportamentoInicial.class [Tipo]
 * Descricao
 * @copyright (c) year, Diego Go
 */
class ComportamentoInicial {

    var $Cor, $Tipo, $Disponibilidade, $Quantidade;

    function __construct($Cor, $Tipo, $Disponibilidade, $Quantidade) {
        $this->Cor = (string) $Cor;
        $this->Tipo = (string) $Tipo;
        $this->Disponibilidade = (String) $Disponibilidade;
        $this->Quantidade = (int) $Quantidade;
        echo "O objeto {$this->Cor} foi Criado<br>"; 
    }

    function __destruct() {
        echo "O objeto {$this->Cor} foi destruido<br>";
    }

    function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}
