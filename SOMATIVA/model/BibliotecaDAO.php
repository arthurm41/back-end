<?php
require_once __DIR__ . '/Biblioteca.php';
require_once __DIR__ . '/connection.php';

class BibliotecaDAO {

    private $conn;

    public function __construct(){
        $this->conn = Connection::getInstance();
    }

    public function criarLivro(Biblioteca $livro){
        $sql = "INSERT INTO biblioteca (titulo, autor, ano, genero, quantidade) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            $livro->getTitulo(),
            $livro->getAutor(),
            $livro->getAno(),
            $livro->getGenero(),
            $livro->getQuantidade()
        ]);
    }

    public function lerLivros(){
        $sql = "SELECT * FROM biblioteca";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $lista = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $lista[] = new Biblioteca(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }
        return $lista;
    }

    public function excluirLivro($titulo){
        $sql = "DELETE FROM biblioteca WHERE titulo = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$titulo]);
    }

    public function buscarPorTitulo($titulo){
        $sql = "SELECT * FROM biblioteca WHERE titulo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$titulo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row){
            return new Biblioteca(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }
        return null;
    }

    public function atualizarLivro($titulo, $autor, $ano, $genero, $quantidade){
        $sql = "UPDATE biblioteca SET autor=?, ano=?, genero=?, quantidade=? WHERE titulo=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$autor, $ano, $genero, $quantidade, $titulo]);
    }
}
