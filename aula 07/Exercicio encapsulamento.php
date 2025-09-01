<?php

//exercicio 1
// class Carros {
//     private $marca;
//     private $modelo;

//     public function __construct($marca = null, $modelo = null) {
//         $this->marca = $marca;
//         $this->modelo = $modelo;
//     }

//     public function getMarca() {
//         return $this->marca;
//     }

//     public function getModelo() {
//         return $this->modelo;
//     }

//     public function setMarca() {
//         $this->marca = $marca;
//     }

//     public function setModelo() {
//         $this->modelo = $modelo;
//     }
// }

// $carro1 = new Carros();
// $carro1->setMarca("Fiat");
// $carro1->setModelo("Uno");


// echo "Marca: " . $carro1->getMarca() . "\n";   
// echo "Modelo: " . $carro1->getModelo() . "\n";



// exericicio 2
// class pessoa {
//     private $nome;
//     private $idade;
//     private $email;

//     public function __construct($nome = null, $idade = null, $email = null) {
//         $this->nome = $nome;
//         $this->idade = $idade;
//         $this ->email = $email;
//     }

//     public function getNome() {
//         return $this->nome;
//     }

//     public function getIdade() {
//         return $this->idade;
//     }

//     public function getEmail() {
//         return $this->email;
//     }

//     public function setNome() {
//         $this->nome = $nome;
//     }

//     public function setIdade() {
//         $this->idade = $idade;
//     }

//     public function setEmail() {
//         $this->email = $email;
//     }
// }

// $pessoa = new Pessoa();

// $pessoa->setNome("Danilo");
// $pessoa->setIdade(32);
// $pessoa->setEmail("Jrdanilo22@gmail.com");

// echo "O nome é " . $pessoa->getNome() . ", tem " . $pessoa->getIdade() . " anos e o email é " . $pessoa->getEmail() . ".";

// exercicio 3
// class Aluno {
//     private $nome;
//     private $nota;

//     public function __construct($nome = null, $nota = null) {
//         $this->nome = $nome;
//         $this->setNota($nota); 
//     }
//     public function getNome() {
//         return $this->nome;
//     }
//     public function getNota() {
//         return $this->nota;
//     }
//     public function setNome($nome) {
//         $this->nome = $nome;
//     }
//     public function setNota($nota) {
//         if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
//             $this->nota = $nota;
//         } else {
//             $this->nota = 0;
//             echo "Nota inválida para {$this->nome}. Nota ajustada para 0.\n";
//         }
//     }
// }

// $aluno1 = new Aluno();
// $aluno1->setNome("Maria");
// $aluno1->setNota(8.5);

// $aluno2 = new Aluno("João", 12); 

// $aluno3 = new Aluno("Ana", -5); 

// $aluno4 = new Aluno("Carlos", 10); 

// echo "Aluno: " . $aluno1->getNome() . " - Nota: " . $aluno1->getNota() . "\n";
// echo "Aluno: " . $aluno2->getNome() . " - Nota: " . $aluno2->getNota() . "\n";
// echo "Aluno: " . $aluno3->getNome() . " - Nota: " . $aluno3->getNota() . "\n";
// echo "Aluno: " . $aluno4->getNome() . " - Nota: " . $aluno4->getNota() . "\n";


// exercicio 4

// class Produto {
//     private $nome;
//     private $preco;
//     private $estoque;

//     public function setNome($nome) {
//         $this->nome = $nome;
//     }
//     public function getNome() {
//         return $this->nome;
//     }
//     public function setPreco($preco) {
//         $this->preco = $preco;
//     }
//     public function getPreco() {
//         return $this->preco;
//     }
//     public function setEstoque($estoque) {
//         $this->estoque = $estoque;
//     }
//     public function getEstoque() {
//         return $this->estoque;
//     }
// }

// $produto = new Produto();
// $produto->setNome("Notebook");
// $produto->setPreco(3500.99);
// $produto->setEstoque(15);
// echo "O produto " . $produto->getNome() . " custa R$ " . number_format($produto->getPreco(), 2, ',', '.') . " e possui " . $produto->getEstoque() . " unidades em estoque.\n";


// exercicio 5

// class Funcionario {
//     private $nome;
//     private $salario;
//     public function setNome($nome) {
//         $this->nome = $nome;
//     }

//     public function setSalario($salario) {
//         $this->salario = $salario;
//     }

//     public function getNome() {
//         return $this->nome;
//     }

//     public function getSalario() {
//         return $this->salario;
//     }
// }

// $funcionario = new Funcionario();   
// $funcionario->setNome("Pedro");
// $funcionario->setSalario(2500.00);


// echo "Funcionário: " . $funcionario->getNome() . " - Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
// $funcionario->setNome("Pedro Silva");
// $funcionario->setSalario(3000.50);
// echo "Funcionário alterado: " . $funcionario->getNome() . " - Salário alterado: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
?>



