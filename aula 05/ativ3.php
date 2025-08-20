<?php

class Usuario {
    public $Nome;
    public $CPF;
    public $sexo;
    public $Email;
    public $Estado_civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;

        public function __construct($Nome, $CPF, $sexo, $Email, $Estado_civil, $cidade, $estado, $endereco, $cep) {
        $this->Nome = $Nome;
        $this->CPF = $CPF;
        $this->sexo = $sexo;
        $this->Email = $Email;
        $this->Estado_civil = $Estado_civil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
}

$Usuario1 = new Usuario(Nome:"Josenildo Afonso Souza" , CPF: "100.200.300-40", sexo: "Masculino", Email:"josenewdo.souza@gmail.com", Estado_civil: "Casado", cidade: "Xique-Xique", estado: "Bahia", endereco: "Rua da amizade, 99", cep: "40123-98");
$Usuario2 = new Usuario(Nome:"Valentina Passos Scherrer", CPF:"070.070.060-70", sexo:"Feminino", Email:"scherrer.valen@outlook.com", Estado_civil:"Divorciada", cidade:"Iracemápolis", estado:"São Paulo", endereco:"Avenida da saudade, 1942", cep:"23456-24");
$Usuario3 = new Usuario(Nome:"Claudio Braz Nepumoceno", CPF:"575.575.242-32", sexo:"Masculino", Email:"Clauclau.nepumoceno@gmail.com", Estado_civil:"Solteiro", cidade:"Piripiri", estado:"Piauí", endereco:"Estrada 3, 33", cep:"12345-99");

?>