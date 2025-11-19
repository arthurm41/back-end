<?php
require_once __DIR__ . '/../model/BibliotecaDAO.php';
require_once __DIR__ . '/../model/Biblioteca.php';

class BibliotecaController {
    private $dao;

    public function __construct() {
        $this->dao = new BibliotecaDAO();
    }

    public function ler(){
        return $this->dao->lerLivros();
    }

    public function criar($titulo, $autor, $ano, $genero, $quantidade){
        $livro = new Biblioteca($titulo, $autor, $ano, $genero, $quantidade);
        return $this->dao->criarLivro($livro);
    }

    public function atualizar($titulo, $autor, $ano, $genero, $quantidade){
        $livro = new Biblioteca($titulo, $autor, $ano, $genero, $quantidade);
        return $this->dao->atualizarLivro($livro);
    }

    public function deletar($titulo){
        return $this->dao->excluirLivro($titulo);
    }
}
