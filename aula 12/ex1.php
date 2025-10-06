<?php

interface Atividade {
    public function executar(Turista $turista, Localidade $localidade): void;
}

class Comida {
    private string $descricao;

    public function __construct(string $descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }
}

class CorpoDagua {
    private string $tipo;

    public function __construct(string $tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo(): string {
        return $this->tipo;
    }
}

class Localidade {
    private string $nome;
    private array $atividades;
    private array $comidas;
    private ?CorpoDagua $corpoDagua;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->atividades = [];
        $this->comidas = [];
        $this->corpoDagua = null;
    }

    public function adicionarAtividade(Atividade $atividade): void {
        $this->atividades[] = $atividade;
    }

    public function adicionarComida(Comida $comida): void {
        $this->comidas[] = $comida;
    }

    public function definirCorpoDagua(CorpoDagua $cd): void {
        $this->corpoDagua = $cd;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function informarAtividades(): array {
        return $this->atividades;
    }

    public function getComidas(): array {
        return $this->comidas;
    }

    public function getCorpoDagua(): ?CorpoDagua {
        return $this->corpoDagua;
    }
}

class Turista {
    private string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

