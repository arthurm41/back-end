<?php

// //exercicio 1
// $idade = "17";
// if ($idade >= "18") {
//     echo "Você é maior de idade";
// } else {
//     echo "Você é menor de idade";
// }

// //exercicio 2
// $nota = 8;
// if ($nota >= 9) {
//     echo "excelente";
// } elseif ($nota >= 7) {
//     echo "bom";
// } else {
//     echo "reprovado";
// }
    

// //exercicio 3


// echo "Digite um número de 1 a 7: ";

// switch ($numero) {
//     case 1:
//         echo "Domingo";
//         break;
//     case 2:
//         echo "Segunda";
//         break;
//     case 3:
//         echo "Terça";
//         break;
//     case 4:
//         echo "Quarta";
//         break;
//     case 5:
//         echo "Quinta";
//         break;
//     case 6:
//         echo "Sexta";
//         break;
//     case 7:
//         echo "Sábado";
//         break;
//     default:
//         echo "Número inválido";
//         break;
// }

//exercicio 4
// $numero1 = "2";
// $numero2 = "2";
// $operacao;
// {}

// //exercicio 5
// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }

//exercicio 6

// if (isset($_POST['num_inicial'])) {
//     $num = (int)$_POST['num_inicial'];

//     for ($i = $num; $i >= 1; $i--) {
//         echo $i . "<br>";
//     }
// }

//exercicio 7 
// if (isset($_POST['num_final'])) {
//     $num = (int)$_POST['num_final'];

//     for ($i = 0; $i <= $num; $i++) {
//         if ($i % 2 == 0) {
//             echo $i . "<br>";
//         }
//     }
// }

//exercicio 8
// if (isset($_POST['numero'])) {
//     $num = (int)$_POST['numero'];

//     echo "<h3>Tabuada do $num:</h3>";
//     for ($i = 1; $i <= 10; $i++) {
//         $resultado = $num * $i;
//         echo "$num x $i = $resultado<br>";
//     }
// }

//exercicio 9
// if (isset($_POST['temp'])) {
//     $temp = (float)$_POST['temp'];

//     if ($temp < 15) {
//         echo "Frio";
//     } elseif ($temp <= 25) {
//         echo "Agradável";
//     } else {
//         echo "Quente";
//     }
// }

//exercicio 10
// for ($i = 0; $i < 5; $i++) {
//     echo "Menu:\n";
//     echo "1 - Olá\n";
//     echo "2 - Data Atual\n";
//     echo "3 - Sair\n";
//     echo "Escolha uma opção: ";

//     $opcao = trim(fgets(STDIN));

//     switch ($opcao) {
//         case '1':
//             echo "Olá\n";
//             break;
//         case '2':
//             echo "Data Atual: " . date('d/m/Y H:i:s') . "\n";
//             break;
//         case '3':
//             echo "Saindo...\n";
//             exit; 
//         default:
//             echo "Opção inválida\n";
//     }

//     echo "\n";
// }
// echo "Fim do programa.\n";


//extra

?>
