<?php

class Dificuldade {
    private string $descricao;
    private bool $superada;

    public function __construct(string $descricao) {
        $this->descricao = $descricao;
        $this->superada = false;
    }

    public function superar(): void {
        $this->superada = true;
    }

    public function isSuperada(): bool {
        return $this->superada;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }
}

class Clima {
    private string $condicaoAtual;

    public function __construct(string $condicao) {
        $this->condicaoAtual = $condicao;
    }

    public function mudar(string $novaCondicao): void {
        $this->condicaoAtual = $novaCondicao;
    }

    public function getCondicaoAtual(): string {
        return $this->condicaoAtual;
    }
}

class Refeicao {
    private string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function servir(Personagem $personagem): void {
        $personagem->receberRefeicao($this);
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Jornada {
    private string $nome;
    private int $etapasTotais;
    private int $etapaAtual;

    public function __construct(string $nome, int $etapasTotais) {
        $this->nome = $nome;
        $this->etapasTotais = $etapasTotais;
        $this->etapaAtual = 0;
    }

    public function avancar(): void {
        if ($this->etapaAtual < $this->etapasTotais) {
            $this->etapaAtual++;
        }
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEtapaAtual(): int {
        return $this->etapaAtual;
    }

    public function getEtapasTotais(): int {
        return $this->etapasTotais;
    }

    public function isCompleta(): bool {
        return $this->etapaAtual >= $this->etapasTotais;
    }
}

class Personagem {
    private string $nome;
    private ?Jornada $jornadaAtual;
    private array $desafiosSuperados;
    private array $refeicoesRecebidas;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->jornadaAtual = null;
        $this->desafiosSuperados = [];
        $this->refeicoesRecebidas = [];
    }

    public function seguirJornada(Jornada $jornada): void {
        $this->jornadaAtual = $jornada;
        $jornada->avancar();
    }

    public function enfrentarDesafio(Dificuldade $dificuldade): void {
        $dificuldade->superar();
        $this->desafiosSuperados[] = $dificuldade;
    }

    public function celebrar(): void {
    }

    public function receberRefeicao(Refeicao $refeicao): void {
        $this->refeicoesRecebidas[] = $refeicao;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getJornadaAtual(): ?Jornada {
        return $this->jornadaAtual;
    }

    public function getDesafiosSuperados(): array {
        return $this->desafiosSuperados;
    }

    public function getRefeicoesRecebidas(): array {
        return $this->refeicoesRecebidas;
    }
}
