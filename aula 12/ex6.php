<?php

class Filme {
    private string $titulo;
    private string $descricao;
    private int $duracao;

    public function __construct(string $titulo, string $descricao, int $duracao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->duracao = $duracao;
    }

    public function getDetalhes(): array {
        return [
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'duracao' => $this->duracao
        ];
    }
}

class Sala {
    private int $numero;

           
    private int $capacidade;
    private array $assentosReservados;

    public function __construct(int $numero, int $capacidade) {
        $this->numero = $numero;
        $this->capacidade = $capacidade;
        $this->assentosReservados = [];
    }

    public function verificarDisponibilidade(int $assento): bool {
        if ($assento < 1 || $assento > $this->capacidade) {
            return false;
        }
        return !in_array($assento, $this->assentosReservados, true);
    }

    public function reservarAssento(int $assento): bool {
        if ($this->verificarDisponibilidade($assento)) {
            $this->assentosReservados[] = $assento;
            return true;
        }
        return false;
    }

    public function liberarAssento(int $assento): void {
        $index = array_search($assento, $this->assentosReservados, true);
        if ($index !== false) {
            unset($this->assentosReservados[$index]);
            $this->assentosReservados = array_values($this->assentosReservados);
        }
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function getCapacidade(): int {
        return $this->capacidade;
    }

    public function getAssentosReservados(): array {
        return $this->assentosReservados;
    }
}

class Sessao {
    private Filme $filme;
    private Sala $sala;
    private string $horario;

    public function __construct(Filme $filme, Sala $sala, string $horario) {
        $this->filme = $filme;
        $this->sala = $sala;
        $this->horario = $horario;
    }

    public function reservarAssento(int $assento): bool {
        return $this->sala->reservarAssento($assento);
    }

    public function liberarAssento(int $assento): void {
        $this->sala->liberarAssento($assento);
    }

    public function getFilme(): Filme {
        return $this->filme;
    }

    public function getSala(): Sala {
        return $this->sala;
    }

    public function getHorario(): string {
        return $this->horario;
    }
}

class Ingresso {
    private Cliente $cliente;
    private Sessao $sessao;
    private int $assento;
    private bool $validado;

    public function __construct(Cliente $cliente, Sessao $sessao, int $assento) {
        $this->cliente = $cliente;
        $this->sessao = $sessao;
        $this->assento = $assento;
        $this->validado = false;
    }

    public function validar(): void {
        $this->validado = true;
    }

    public function isValidado(): bool {
        return $this->validado;
    }

    public function getCliente(): Cliente {
        return $this->cliente;
    }

    public function getSessao(): Sessao {
        return $this->sessao;
    }

    public function getAssento(): int {
        return $this->assento;
    }
}

class Cliente {
    private string $nome;
    private array $ingressos;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->ingressos = [];
    }

    public function comprarIngresso(SistemaDeCinema $sistema, Sessao $sessao, int $assento): ?Ingresso {
        if ($sistema->venderIngresso($this, $sessao, $assento)) {
            $ingresso = new Ingresso($this, $sessao, $assento);
            $this->ingressos[] = $ingresso;
            return $ingresso;
        }
        return null;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIngressos(): array {
        return $this->ingressos;
    }
}

class SistemaDeCinema {
    private array $sessoes;

    public function __construct() {
        $this->sessoes = [];
    }

    public function adicionarSessao(Sessao $sessao): void {
        $this->sessoes[] = $sessao;
    }

    public function exibirSessoes(): array {
        return $this->sessoes;
    }

    public function venderIngresso(Cliente $cliente, Sessao $sessao, int $assento): bool {
        if ($sessao->reservarAssento($assento)) {
            return true;
        }
        return false;
    }
}
