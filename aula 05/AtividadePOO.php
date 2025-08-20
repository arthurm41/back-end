<?php

class cachorro {
    public $Nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($Nome, $idade, $raca, $castrado, $sexo) {
        $this->Nome = $Nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }
}

$cachorro1 = new cachorro("cupcake", 3, "american bully", true, "Macho");
$cachorro2 = new cachorro("lola", 8, "poodle", false, "Fêmea");
$cachorro3 = new cachorro("rex", 5, "pastor alemão", true, "Macho");
$cachorro4 = new cachorro("bella", 1, "labrador", false, "Fêmea");
$cachorro5 = new cachorro("thor", 4, "golden retriever", true, "Macho");
$cachorro6 = new cachorro("luna", 3, "bulldog francês", false, "Fêmea");   
$cachorro7 = new cachorro("max", 6, "beagle", true, "Macho");
$cachorro8 = new cachorro("molly", 2, "shih tzu", false, "Fêmea");  
$cachorro9 = new cachorro("zeus", 7, "boxer", true, "Macho");
$cachorro10 = new cachorro("lola", 10, "cocker spaniel", false, "Fêmea");

