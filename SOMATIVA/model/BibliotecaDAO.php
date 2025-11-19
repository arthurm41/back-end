<?php
require_once __DIR__ . '/Connection.php';
require_once __DIR__ . '/Biblioteca.php';

class BibliotecaDAO {

    private $conn;

    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    public function criarLivro(Biblioteca $livro){
        $sql = "INSERT INTO biblioteca (titulo, autor, ano, genero, quantidade) 
                VALUES (?, ?, ?, ?, ?)";

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
        $stmt = $this->conn->query($sql);
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $livros = [];

        foreach ($dados as $row){
            $livros[] = new Biblioteca(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }

        return $livros;
    }

    public function atualizarLivro(Biblioteca $livro){
        $sql = "UPDATE biblioteca SET 
                    autor = ?, 
                    ano = ?, 
                    genero = ?, 
                    quantidade = ?
                WHERE titulo = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $livro->getAutor(),
            $livro->getAno(),
            $livro->getGenero(),
            $livro->getQuantidade(),
            $livro->getTitulo()
        ]);
    }

    public function excluirLivro($titulo){
        $sql = "DELETE FROM biblioteca WHERE titulo = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$titulo]);
    }
}
