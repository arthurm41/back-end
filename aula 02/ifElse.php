<?php

$nota = 8.5;
$nota2 = 10;
$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    echo "Aluno Aprovado com média: $media";
} else {
    echo "Aluno Reprovado com média: $media";
}

//com porcentagem

$nota = 8.5;
$nota2 = 10;
$presenca = 80; // Presença em porcentagem
$media = ($nota1 + $nota2) / 2;

if ($media >= 7 && $presenca >= 75) {
    echo "Aluno Aprovado com média: $media";
} else {
    echo "Aluno Reprovado com média: $media";
}

