<?php

// //Exercicio 1
//  $marca_carr= "Nissan";
//  $modelo_carro= "Versa";
//  $ano_carro= 2020;
//  $revisao_carro= "true";
//  $Ndonos_carro= 2;

//  function exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) {
//     echo "O carro $marca $modelo, ano $ano, já passou por revisão: $revisao, número de donos: $Ndonos";
// }


// exibirCarro("Versa", "Nissan", 2020, "Sim", 2); {
    
// }
// //Exercicio 2
// function ehSeminovo($ano) {
//     $anoAtual = date("Y"); // Pega o ano atual, por exemplo 2025
//     $idade = $anoAtual - $ano;
    
//     if ($idade <= 3) {
//         return true;
//     } else {
//         return false;
//     }
// }

// Exercicio 3

// function precisaRevisao(bool $revisao, int $ano): string {
//     if ($revisao === false && $ano < 2022) {
//         return "Precisa de revisão";
//     }
//     return "Revisão em dia";
// }

// // Exemplos de uso:
// echo precisaRevisao(false, 2020); // Output: Precisa de revisão
// echo precisaRevisao(true, 2019);  // Output: Revisão em dia
// echo precisaRevisao(false, 2023); // Output: Revisão em dia

// Exercicio 4
 

// function calcularValor(string $marca, int $ano, int $Ndonos): float {
//     // Define o preço base conforme a marca
//     switch (strtolower($marca)) {
//         case 'bmw':
//         case 'porsche':
//             $precoBase = 300000;
//             break;
//         case 'nissan':
//             $precoBase = 70000;
//             break;
//         case 'byd':
//             $precoBase = 150000;
//             break;
//         default:
//             $precoBase = 50000; // Valor base genérico para marcas não listadas
//     }

//     // Desconto por donos anteriores além do primeiro (5% por dono adicional)
//     $donosExtras = max(0, $Ndonos - 1);
//     $precoComDescontoDonos = $precoBase * pow(0.95, $donosExtras);

//     // Desconto por ano de uso
//     $anoAtual = date("Y");
//     $anosDeUso = max(0, $anoAtual - $ano);
//     $descontoAno = $anosDeUso * 3000;

//     // Valor final estimado
//     $valorFinal = $precoComDescontoDonos - $descontoAno;
//     return max(0, $valorFinal); // Evita valores negativos
// }

// // Exemplo de uso
// $carros = [
//     ["marca" => "BMW", "ano" => 2020, "Ndonos" => 2],
//     ["marca" => "Nissan", "ano" => 2018, "Ndonos" => 3],
//     ["marca" => "BYD", "ano" => 2023, "Ndonos" => 1],
//     ["marca" => "Porsche", "ano" => 2015, "Ndonos" => 4],
//     ["marca" => "Fiat", "ano" => 2010, "Ndonos" => 2] // marca não listada
// ];

// foreach ($carros as $carro) {
//     $valor = calcularValor($carro['marca'], $carro['ano'], $carro['Ndonos']);
//     echo "Marca: {$carro['marca']}, Ano: {$carro['ano']}, Donos: {$carro['Ndonos']} -> Valor estimado: R$ " . number_format($valor, 2, ',', '.') . "<br>";
// }
// ?>


