<?php

// exercicio 5/6
// class Cachorro {
//     public $Nome;
//     public $idade;
//     public $raca;
//     public $castrado;
//     public $sexo;

//     public function latir() {
//         $sexo = strtolower($this->sexo);

//         if ($sexo === 'm' || $sexo === 'masculino') {
//             echo "O cachorro {$this->Nome} da raça {$this->raca} está latindo\n";
//         } else {
//             echo "A {$this->Nome} está latindo\n";
//         }
//     }

//     public function marcarTerritorio() {
//         echo "O cachorro {$this->Nome} da raça {$this->raca} está marcando território\n";
//     }

//     public function __construct($Nome, $idade, $raca, $castrado, $sexo) {
//         $this->Nome = $Nome;
//         $this->idade = $idade;
//         $this->raca = $raca;
//         $this->castrado = $castrado;
//         $this->sexo = $sexo;
//     }
// }

// exercicio 7
// class Usuarios {
//     public $nome;
//     public $sexo;

//     public function __construct($nome, $sexo) {
//         $this->nome = $nome;
//         $this->sexo = strtolower($sexo); 
//     }

//     public function testandoReservista() {
//         if ($this->sexo === 'm' || $this->sexo === 'masculino') {
//             echo "Apresente seu certificado de reservista do tiro de guerra!\n";
//         } else {
//             echo "Tudo certo\n";
//         }
//     }
// }

// exericicio 8
// class Usuarios {
//     public $nome;
//     public $sexo;
//     public $estadoCivil;

//     public function __construct($nome, $sexo, $estadoCivil) {
//         $this->nome = $nome;
//         $this->sexo = strtolower($sexo);
//         $this->estadoCivil = $estadoCivil;
//     }

//     public function testandoReservista() {
//         if ($this->sexo === 'm' || $this->sexo === 'masculino') {
//             echo "Apresente seu certificado de reservista do tiro de guerra!\n";
//         } else {
//             echo "Tudo certo\n";
//         }
//     }

//     public function casamento($anos_casado) {
//         if (strtolower($this->estadoCivil) === 'casado') {
//             echo "Parabéns pelo seu casamento de {$anos_casado} anos!\n";
//         } else {
//             echo "oloco\n";
//         }
//     }
// }

