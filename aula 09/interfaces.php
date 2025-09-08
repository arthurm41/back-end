<?php
// existem 3 tipos: Public, Private e Protected
// Public nomeDoAtributo: metodos e atributos publicos

// Private nomeDoAtributo: metodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los.

// protected nomeDoAtributo: metodos e atributos protegidos para acesso somente da classes e de suas classes filhas.

// namespace Aula 09;

// caso tenham mais arquivos que formam o BackEnd de uma pagina WEB e possuem a mesma raiz, o namespace sera o mesmo.

namespace Aula_09;

// interface: é um recurso no qual garante que obrigatoriamente a classe tenho que construir algum método previamente determinado. Funcionacom uma promessa ou contrato.Exemplo: configuramos uma interface "Pagamento" que faz com que qualquer classe que a implemente, tenha que obrigatoriamente construir o metodo "pagar".

interface pagamento {
    public function pagamento($valor);
}

class CartaoDeCredito implements pagamento {
    public function pagamento($valor): void{
        echo "Pagamento realizado com cartão de crédito, valor: $valor\n";
    }
}

class pix implements pagamento {
    public function pagamento($valor): void {
        echo "Pagamento realizado via pix, valor $valor\n";
    }  
} 


class DinheiroEspecie implements Pagamento {
    public function pagamento($valor): void {
        $valorComDesconto = $valor * 0.90;
        echo "Pagamento realizado com dinheiro em espécie. Valor com desconto: R$ ";
    }
}

$cred = new CartaoDeCredito();

echo "testando cartão de credito para pagamento:".$cred->pagamento
(250);

$p = new PIX();
$din = new DinheiroEspecie();


interface Forma {
    public function calcularArea(): float;
}

class Quadrado implements Forma {
    private float $lado;

    public function __construct(float $lado) {
        $this->lado = $lado;
    }

    public function calcularArea(): float {
        return $this->lado * $this->lado;
    }
}

class Circulo implements Forma {
    private float $raio;

    public function __construct(float $raio) {
        $this->raio = $raio;
    }

    public function calcularArea(): float {
        return pi() * pow($this->raio, 2);
    }
}

$quadrado = new Quadrado(1);
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";

$circulo = new Circulo(2);
echo "Área do círculo: " . $circulo->calcularArea() . "\n";


class Pentagono implements Forma {
    private float $lado;

    public function __construct(float $lado) {
        $this->lado = $lado;
    }

    public function calcularArea(): float {
        return (1/4) * sqrt(5 * (5 + 2 * sqrt(5))) * pow($this->lado, 2);
    }
}

class Hexagono implements Forma {
    private float $lado;

    public function __construct(float $lado) {
        $this->lado = $lado;
    }

    public function calcularArea(): float {
        return (3 * sqrt(3) / 2) * pow($this->lado, 2);
    }
}
