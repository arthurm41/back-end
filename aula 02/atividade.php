<?php

$nota1 = 2;
$nota2 = 3;
$media = ($nota1 + $nota2) / 2;
$presenca = 60;
$aulasTotais = 80;
$frequencia = ($presenca / $aulasTotais) * 100;
$nome = "Enzo Enrico";

if ($media >= 7 && $frequencia >= 75 || $nome == "Enzo Enrico") {
    echo "\nAluno $nome Aprovado com média: $media e frequência: $frequencia%";
    echo "\nAluno $nome Reprovado com média: $media e frequência: $frequencia%";
    echo "\nO Aluno possui uma frequência de: $frequencia%";
}
else {
    echo "\nAluno $nome Reprovado com média: $media e frequência: $frequencia%";
    echo "\nO Aluno possui uma frequência de: $frequencia%";
    echo "\nO aluno possui uma frequência de: $frequencia%";

}
?>