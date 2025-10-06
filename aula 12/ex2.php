<?php

class Missao {
    private string $descricao;
    private bool $emAndamento;

    public function __construct(string $descricao) {
        $this->descricao = $descricao;
        $this->emAndamento = false;
    }

    public function iniciar(): void {
        $this->emAndamento = true;
    }

    public function finalizar(): void {
        $this->emAndamento = false;
    }

    public function isEmAndamento(): bool {
        return $this->emAndamento;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }
}

class LocalDeTreinamento {
    private string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function oferecerTreinamento(Heroi $heroi): void {
        $heroi->aumentarNivelTreinamento();
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Brinquedo {
    private string $nome;
    private string $tipo;

    public function __construct(string $nome, string $tipo) {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getTipo(): string {
        return $this->tipo;
    }
}

class Shopping {
    private string $nome;
    private array $brinquedos;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->brinquedos = [];
    }

    public function adicionarBrinquedo(Brinquedo $brinquedo): void {
        $this->brinquedos[] = $brinquedo;
    }

    public function receberDoacao(Brinquedo $brinquedo): void {
        $this->brinquedos[] = $brinquedo;
    }

    public function getBrinquedos(): array {
        return $this->brinquedos;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Crianca {
    private string $nome;
    private array $brinquedosRecebidos;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->brinquedosRecebidos = [];
    }

    public function receberBrinquedo(Brinquedo $brinquedo): void {
        $this->brinquedosRecebidos[] = $brinquedo;
    }

    public function getBrinquedosRecebidos(): array {
        return $this->brinquedosRecebidos;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Heroi {
    private string $nome;
    private int $nivelTreinamento;
    private array $missoesConcluidas;
    private array $brinquedos;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->nivelTreinamento = 0;
        $this->missoesConcluidas = [];
        $this->brinquedos = [];
    }

    public function treinar(LocalDeTreinamento $local): void {
        $local->oferecerTreinamento($this);
    }

    public function realizarMissao(Missao $missao): void {
        $missao->iniciar();
        $missao->finalizar();
        $this->missoesConcluidas[] = $missao;
    }

    public function doarBrinquedo(Crianca $crianca, Brinquedo $brinquedo): void {
        $index = array_search($brinquedo, $this->brinquedos, true);
        if ($index !== false) {
            unset($this->brinquedos[$index]);
            $crianca->receberBrinquedo($brinquedo);
            $this->brinquedos = array_values($this->brinquedos);
        }
    }

    public function adicionarBrinquedo(Brinquedo $brinquedo): void {
        $this->brinquedos[] = $brinquedo;
    }

    public function getBrinquedos(): array {
        return $this->brinquedos;
    }

    public function getMissoesConcluidas(): array {
        return $this->missoesConcluidas;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getNivelTreinamento(): int {
        return $this->nivelTreinamento;
    }

    public function aumentarNivelTreinamento(): void {
        $this->nivelTreinamento++;
    }
}
