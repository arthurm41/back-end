<?php
class animal {
    private $especie;
    private $habitat;
    private $sexo;
    private $alimentacao;
    
    public function __construct($especie, $habitat, $sexo, $alimentacao) {
        $this->setEspecie($especie);
    }
}