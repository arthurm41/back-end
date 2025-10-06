<?php

abstract class Usuario {
    protected string $nome;
    protected array $emprestimos;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->emprestimos = [];
    }

    public function solicitarEmprestimo(SistemaDeBiblioteca $sistema, ItemBibliotecario $item): ?Emprestimo {
        if ($item->emprestar()) {
            $emprestimo = new Emprestimo($this, $item);
            $this->emprestimos[] = $emprestimo;
            $sistema->registrarEmprestimo($emprestimo);
            return $emprestimo;
        }
        return null;
    }

    public function devolverItem(SistemaDeBiblioteca $sistema, Emprestimo $emprestimo): void {
        $emprestimo->finalizar();
        $emprestimo->getItem()->devolver();
        $sistema->registrarDevolucao($emprestimo);
        // remover o empréstimo da lista do usuário
        $index = array_search($emprestimo, $this->emprestimos, true);
        if ($index !== false) {
            unset($this->emprestimos[$index]);
            $this->emprestimos = array_values($this->emprestimos);
        }
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmprestimos(): array {
        return $this->emprestimos;
    }
}

class Aluno extends Usuario {
    // pode adicionar métodos específicos se necessário
}

class Professor extends Usuario {
    // pode adicionar métodos específicos se necessário
}

abstract class ItemBibliotecario {
    protected string $titulo;
    protected bool $emprestado;

    public function __construct(string $titulo) {
        $this->titulo = $titulo;
        $this->emprestado = false;
    }

    public function emprestar(): bool {
        if (!$this->emprestado) {
            $this->emprestado = true;
            return true;
        }
        return false;
    }

    public function devolver(): void {
        $this->emprestado = false;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function isEmprestado(): bool {
        return $this->emprestado;
    }
}

class Livro extends ItemBibliotecario {
    // pode adicionar atributos específicos
}

class Revista extends ItemBibliotecario {
    // pode adicionar atributos específicos
}

class Emprestimo {
    private Usuario $usuario;
    private ItemBibliotecario $item;
    private DateTime $dataEmprestimo;
    private ?DateTime $dataDevolucao;

    public function __construct(Usuario $usuario, ItemBibliotecario $item) {
        $this->usuario = $usuario;
        $this->item = $item;
        $this->dataEmprestimo = new DateTime();
        $this->dataDevolucao = null;
    }

    public function finalizar(): void {
        $this->dataDevolucao = new DateTime();
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function getItem(): ItemBibliotecario {
        return $this->item;
    }

    public function getDataEmprestimo(): DateTime {
        return $this->dataEmprestimo;
    }

    public function getDataDevolucao(): ?DateTime {
        return $this->dataDevolucao;
    }

    public function isFinalizado(): bool {
        return $this->dataDevolucao !== null;
    }
}

class SistemaDeBiblioteca {
    private array $emprestimos;

    public function __construct() {
        $this->emprestimos = [];
    }

    public function registrarEmprestimo(Emprestimo $emprestimo): void {
        $this->emprestimos[] = $emprestimo;
    }

    public function registrarDevolucao(Emprestimo $emprestimo): void {
    }

    public function getEmprestimos(): array {
        return $this->emprestimos;
    }
}
