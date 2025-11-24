<?php
require_once __DIR__ . '/../model/BibliotecaDAO.php';

class BibliotecaController {

    private $dao;

    public function __construct(){
        $this->dao = new BibliotecaDAO();
    }

    public function criar($t, $a, $ano, $g, $q){
        $livro = new Biblioteca($t, $a, $ano, $g, $q);
        return $this->dao->criarLivro($livro);
    }

    public function ler(){
        return $this->dao->lerLivros();
    }

    public function deletar($titulo){
        return $this->dao->excluirLivro($titulo);
    }

    public function buscarPorTitulo($titulo){
        return $this->dao->buscarPorTitulo($titulo);
    }

    public function atualizar($titulo, $autor, $ano, $genero, $quantidade){
        return $this->dao->atualizarLivro($titulo, $autor, $ano, $genero, $quantidade);
    }
}
