<?php

class Escolha {
    private string $descricao;
    private bool $executada;

    public function __construct(string $descricao) {
        $this->descricao = $descricao;
        $this->executada = false;
    }

    public function executar(): void {
        $this->executada = true;
    }

    public function isExecutada(): bool {
        return $this->executada;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }
}

class BancoDeSangue {
    private array $doacoes;

    public function __construct() {
        $this->doacoes = [];
    }

    public function receberDoacao(Pessoa $pessoa, int $quantidade): void {
        $this->doacoes[] = [
            'pessoa' => $pessoa,
            'quantidade' => $quantidade,
            'data' => new DateTime()
        ];
    }

    public function getDoacoes(): array {
        return $this->doacoes;
    }
}

class Pessoa {
    private string $nome;
    private int $idade;
    private bool $gravida;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->idade = 0;
        $this->gravida = false;
    }

    public function engravidar(): void {
        $this->gravida = true;
    }

    public function nascer(): void {
        $this->idade = 0;
    }

    public function crescer(): void {
        $this->idade++;
    }

    public function fazerEscolha(Escolha $escolha): void {
        $escolha->executar();
    }

    public function doarSangue(BancoDeSangue $banco, int $quantidade): void {
        $banco->receberDoacao($this, $quantidade);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function isGravida(): bool {
        return $this->gravida;
    }
}
