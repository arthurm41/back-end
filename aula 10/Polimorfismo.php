 <?php
// Polimorfismo:

// O termo Polimorfismo significa "várias formas". Associando isso a Programação Orientada a Objetos, o conceito se trata de várias classes e suas instâncias (objetos) respondendo a um método de formas diferentes. No exemplo do Interface da AULA9, temos um método calcularArea() que responde de forma diferente à classe Circulo. Isso quer dizer que a função é a mesma - calcular a área de forma geométrica - mas a operação muda de acordo com a figura.

// namespace AULA10;

// interface Veiculo {
//     public function mover();
// }

// class Carro implements Veiculo {
//     public function mover() {
//         echo "O carro está andando\n";
//     }
// }

// class Aviao implements Veiculo {
//     public function mover() {
//         echo "O avião está voando\n";
//     }
// }

// class Barco implements Veiculo {
//     public function mover() {
//         echo "O navio está navegando\n";
//     }
// }

// class Elevador implements Veiculo {
//     public function mover() {
//         echo "O elevador está subindo\n";
//     }
// }

// $carro = new Carro();
// $aviao = new Aviao();
// $barco = new Barco();
// $elevador = new Elevador();

// echo $carro->mover();
// echo $aviao->mover();
// echo $barco->mover();
// echo $elevador->mover();


// exercicio 1

// interface Forma {
//     public function calcularArea(): float;
// }

// class Quadrado implements Forma {
//     private float $lado;

//     public function __construct(float $lado) {
//         $this->lado = $lado;
//     }

//     public function calcularArea(): float {
//         return $this->lado * $this->lado;
//     }
// }

// class Retangulo implements Forma {
//     private float $base;
//     private float $altura;

//     public function __construct(float $base, float $altura) {
//         $this->base = $base;
//         $this->altura = $altura;
//     }

//     public function calcularArea(): float {
//         return $this->base * $this->altura;
//     }
// }

// class Circulo implements Forma {
//     private float $raio;

//     public function __construct(float $raio) {
//         $this->raio = $raio;
//     }

//     public function calcularArea(): float {
//         return pi() * $this->raio * $this->raio;
//     }
// }

// $formas = [
//     new Quadrado(4),
//     new Retangulo(5, 10),
//     new Circulo(3)
// ];

// foreach ($formas as $forma) {
//     echo "Área: " . $forma->calcularArea();
// }



// exercicio 2

// class Animal {
//     public function fazerSom() {
//         echo "Som genérico\n";
//     }
// }

// class Cachorro extends Animal {
//     public function fazerSom() {
//         echo "Au au!\n";
//     }
// }

// class Gato extends Animal {
//     public function fazerSom() {
//         echo "Miau!\n";
//     }
// }

// class Vaca extends Animal {
//     public function fazerSom() {
//         echo "Muuu!\n";
//     }
// }

// $animais = [
//     new Cachorro(),
//     new Gato(),
//     new Vaca()
// ];

// foreach ($animais as $animal) {
//     $animal->fazerSom();
// }

// exercicio 3

//  class Transporte {
//     public function mover();
// }

// class Carro extends Transporte {
//     public function mover() {
//         echo "O carro está andando na estrada\n";
//     }
// }

// class Barco extends Transporte {
//     public function mover() {
//         echo "O barco está navegando no mar\n";
//     }
// }

// class Aviao extends Transporte {
//     public function mover() {
//         echo "O avião está voando no céu\n";
//     }
// }

// class Elevador extends Transporte {
//     public function mover() {
//         echo "O Elevador está correndo pelo prédio\n";
//     }
// }

// $transportes = [
//     new Carro(),
//     new Barco(),
//     new Aviao(),
//     new Elevador()
// ];

// foreach ($transportes as $transporte) {
//     $transporte->mover();
// }



// exercicio 4
// class Email {
//     public function enviar() {
//         return "Enviando email...";
//     }
// }

// class Sms {
//     public function enviar() {
//         return "Enviando SMS...";
//     }
// }

// function notificar($meio) {
//     if (method_exists($meio, 'enviar')) {
//         echo $meio->enviar();
//     } else {
//         echo "Objeto inválido para notificação.";
//     }
// }

// $email = new Email();
// $sms = new Sms();

// notificar($email);
// notificar($sms);

// exercicio 5


// class Calculadora {
//     public function somar() {
//         $args = func_get_args();
//         $quantidade = func_num_args();

//         if ($quantidade === 2) {
//             return $args[0] + $args[1];
//         }

//         if ($quantidade === 3) {
//             return $args[0] + $args[1] + $args[2];
//         }

//         return "Número de argumentos inválido";
//     }
// }

// $calc = new Calculadora();

// echo $calc->somar(10, 5);      
// echo $calc->somar(1, 2, 3);    
// echo $calc->somar(1);          

// exercicio extra

// interface Movel {
//     public function mover();
// }

// interface Abastecivel {
//     public function abastecer($quantidade);
// }

// interface Manutenivel {
//     public function fazerManutencao();
// }

// class Carro implements Movel, Abastecivel {
//     public function mover() {
//         echo "O carro está se movimentando\n";
//     }

//     public function abastecer($quantidade) {
//         echo "Carro abastecido com $quantidade litros\n";
//     }
// }

// class Bicicleta implements Movel, Manutenivel {
//     public function mover() {
//         echo "A bicicleta está pedalando\n";
//     }

//     public function fazerManutencao() {
//         echo "A bicicleta foi lubrificada\n";
//     }
// }

// class Onibus implements Movel, Abastecivel, Manutenivel {
//     public function mover() {
//         echo "O ônibus está transportando passageiros\n";
//     }

//     public function abastecer($quantidade) {
//         echo "Ônibus abastecido com $quantidade litros\n";
//     }

//     public function fazerManutencao() {
//         echo "O ônibus está passando por revisão\n";
//     }
// }

// $carro = new Carro();
// $carro->mover();
// $carro->abastecer(40);

// $bicicleta = new Bicicleta();
// $bicicleta->mover();
// $bicicleta->fazerManutencao();

// $onibus = new Onibus();
// $onibus->mover();
// $onibus->abastecer(100);
// $onibus->fazerManutencao();