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

    public function setTitulo($t){ $this->titulo = $t; }
    public function setAutor($a){ $this->autor = $a; }
    public function setAno($a){ $this->ano = $a; }
    public function setGenero($g){ $this->genero = $g; }
    public function setQuantidade($q){ $this->quantidade = $q; }
}
