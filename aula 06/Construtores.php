<?php

class ProdutosMercado{
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

public function atualizarEstoque($qtde_vendida): float|int{
 $this->qtde_estoque = $this->qtde_estoque - $qtde_vendida;
 return $this->qtde_estoque;
}
 public function _construct($nome, $categoria, $fornecedor, $qtde_estoque){
    $this->nome = $nome;
    $this->categoria = $categoria;
    $this->fornecedor = $fornecedor;
    $this->qtde_estoque = $qtde_estoque;
    }
}

$produto1 = new ProdutosMercado(); 
$produto1->nome = "Suco tang";
$produto1->categoria = "Bebidas";
$produto1->fornecedor = "Mondelez";
$produto1->qtde_estoque = 200;

$produto2 = new ProdutosMercado();
$produto2->nome = "nome";
$produto2->categoria = "categoria";
$produto2->fornecedor = "fornecedor";
$produto2->qtde_estoque = "qtde_estoque";


$produto1 = new ProdutosMercado("suco tang", "Bebidas", "Mondelez", 200);
$produto2 = new ProdutosMercado("Energetico Monster", "Bebidas", "Coca-Cola", 150);




