<?php

class Biblioteca {
    private $titulo;
    private $autor;
    private $ano;
    private $genero;
    private $quantidade;

    public function __construct($titulo, $autor, $ano, $genero, $quantidade){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->genero = $genero;
        $this->quantidade = $quantidade;
    }

    public function getTitulo(){ return $this->titulo; }
    public function getAutor(){ return $this->autor; }
    public function getAno(){ return $this->ano; }
    public function getGenero(){ return $this->genero; }
    public function getQuantidade(){ return $this->quantidade; }

    public function setAutor($v){ $this->autor = $v; }
    public function setAno($v){ $this->ano = $v; }
    public function setGenero($v){ $this->genero = $v; }
    public function setQuantidade($v){ $this->quantidade = $v; }
}
