<?php
/*Desenvolva um codigo com a mesma estrutura que o abaixo,porem com os seus dados.*/

    echo"Olá! \n";
    $nome ="Arthur! \n";
    $idade ="17";
    $ano_atual = "2025";

    $data_nasc= $ano_atual-$idade;
    echo $nome, "você nasceu em:", $data_nasc;


// Faça as questões 2 e 3 do slide Aula 01 - Fundamentos basicos

$str = "Programação em php";
echo "\nMinúsculo,";
$str = strtoupper(string: $str);
echo "\Maiúsculo: ", $str;
$str = strtolower(string: $str);
echo "\nMinusculo novamente: ", $str;


// exercicio 3

$exerc3 = "o php foi criado em mil novecentos e noventa e cinco";
echo "\nAntes do comando replace: \n",$exerc3;
$exerc3 =  str_replace(['o','a','i'], replace: ['0','4','1'], subject: $exerc3);
echo "\nApós o comando replace: \n", $exerc3

   ?>

