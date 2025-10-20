<?php 

    namespace Aula13;

    require_once "crud.php";
    require_once "alunoDAO.php";

    use Aula13\Aluno;

    $dao = new AlunoDao();

    $aluno1 = new Aluno(1, "Josias", "Panificação");
    $aluno2 = new Aluno(2, "Victor Hugo", "Manicure");
    $aluno3 = new Aluno(3, "Beatriz", "Eletricista");

    echo "Listagem inicial:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

    $dao->atualizarAlunos(1, "Josias", "Técnico em borracharia");

    echo "\nApós atualização:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }   

    $dao->atualizarAlunos(1, "Jozias", "Técnico em borracharia");

    echo "\nApós atualização:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

?>