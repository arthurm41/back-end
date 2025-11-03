<?php

namespace Aula14;

require_once "produto.php";

class ProdutoDAO {
    private $produtos = [];
    private $arquivo = "produtos.json";

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);

            if (is_array($dados)) {
                foreach ($dados as $dado) {
                    $produto = new Produto($dado['codigo'], $dado['nome'], $dado['preco']);
                    $this->produtos[$produto->getCodigo()] = $produto;
                }
            }
        }
    }

    public function criarProduto(Produto $produto) {
        $this->produtos[$produto->getCodigo()] = $produto;
        $this->salvarNoArquivo();
    }

    public function lerProdutos() {
        return $this->produtos;
    }

    public function atualizarProduto($codigo, $novoNome, $novoPreco) {
        if (isset($this->produtos[$codigo])) {
            $this->produtos[$codigo]->setNome($novoNome);
            $this->produtos[$codigo]->setPreco($novoPreco);
            $this->salvarNoArquivo();
        }
    }

    public function excluirProduto($codigo) {
        if (isset($this->produtos[$codigo])) {
            unset($this->produtos[$codigo]);
            $this->salvarNoArquivo();
        }
    }

    private function salvarNoArquivo() {
        $dados = [];
        foreach ($this->produtos as $produto) {
            $dados[] = [
                'codigo' => $produto->getCodigo(),
                'nome' => $produto->getNome(),
                'preco' => $produto->getPreco()
            ];
        }

        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
?>
