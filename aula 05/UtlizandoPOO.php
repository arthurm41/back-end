<?php

class carro {
    public $N_Donos;
    public $modelo;
    public $ano;
    public $revisao;
    public $marca;

    public function __construct($N_Donos, $modelo, $ano, $revisao, $marca) {
        $this->N_Donos = $N_Donos;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->marca = $marca;
    }
}

$carro1 = new carro(3, "911", "2020", false, "Porsche");
$carro2 = new carro(N_Donos: 1, modelo: "Civic", ano: "2021", revisao: true, marca: "Honda");
$carro3 = new carro(N_Donos:2, modelo:"Supra", ano:"2018", revisao:false, marca:"Toyota");
$carro4 = new carro(N_Donos: 1, modelo: "MX-5", ano: "2022", revisao: true, marca: "Mazda");
$carro5 = new carro(N_Donos: 1, modelo: "Mustang", ano: "2015", revisao: false, marca: "Ford");
$carro6 = new carro(N_Donos: 2, modelo: "Vantage coupé", ano: "2019", revisao: true, marca: "Aston Martin");

