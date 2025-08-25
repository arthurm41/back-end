<?php

// exercicio 1

class Moto{
    public $Modelo;
    public $Ano;
    public $Marca;
    public $Revisão;

}
// exercicio 2

$moto1 = new Moto(); 
$moto1->Modelo = "Xtz 150";
$moto1->Ano = "2025";
$moto1->Marca = "Yamaha";
$moto1->Revisão = true;

$moto2 = new Moto(); 
$moto2->Modelo = "GSX";
$moto2->Ano = "2024";
$moto2->Marca = "Suzuki";
$moto2->Revisão = False;


$moto3 = new Moto(); 
$moto3->Modelo = "Ducati";
$moto3->Ano = "2020";
$moto3->Marca = "panigale";
$moto3->Revisão = False;

// exercicio 3

//  public function _construct($dia, $mes, $ano){
//     $this->dia = $dia;
//     $this->mes = $mes;
//     $this->ano = $ano;

//     }

//  public function _construct($nome, $idade, $cpf,
//  $telefone, $endereco, $estado_civil e $sexo;){
//     $this->nome = $nome;
//     $this->idade = $idade;
//     $this->cpf = $cpf;
//     $this->telefone = $telefone;
//     $this->endereco = $endereco;
//     $this->sexo = $sexo;


//     }

//  public function _construct($marca, $nome,
// $categoria, $data_fabricacao e $data_venda;){
//     $this->marca = $marca;
//     $this->nome = $nome;
//     $this->categoria = $categoria;
//     $this->data_fabricacao = $data_fabricacao;
//     $this->data_venda = $data_venda;

// }

?>
