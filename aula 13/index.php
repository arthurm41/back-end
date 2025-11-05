<?php 

    namespace Aula13;

    require_once "crud.php";
    require_once "alunoDAO.php";

    use Aula13\Aluno;

    $dao = new AlunoDao();

    $dao -> criarAlunos(new Aluno(1, "Josias", "Panificação"));
    $dao -> criarAlunos(new Aluno(2, "Victor Hugo", "Manicure"));
    $dao -> criarAlunos(new Aluno(3, "Beatriz", "Eletricista"));

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

    $dao->criarAlunos(new Aluno(4,'Aurora','Arquitetura'));
    $dao->criarAlunos(new Aluno(5,'Oliver','Gestão'));
    $dao->criarAlunos(new Aluno(6,'Amanda','Luta'));
    $dao->criarAlunos(new Aluno(7,'Geysa','Engenharia'));
    $dao->criarAlunos(new Aluno(8,'Joab','Elétrica'));
    $dao->criarAlunos(new Aluno(9,'Miguel','Streamer'));

    echo "\nApós atualização:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

    $dao->atualizarAlunos(7, "Clotilde", "Engenharia");
    $dao->atualizarAlunos(8, "Joana", "Elétrica");
    $dao->atualizarAlunos(9, "Miguel", "Designer");
    $dao->atualizarAlunos(6, "Amanda", "Logística");
    $dao->atualizarAlunos(5, "Oliver", "Elétrica");

    echo "\nApós atualização:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

    $dao->excluirAlunos(4);
    $dao->excluirAlunos(7);

    echo "\nApós exclusão:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

?>

<!-- Diferente dos arrays convencionais que associam os valores armazenados no array a um indice, nos arrays associativos os valores são associados a uma chave, aonde as chaves assumem o papel do índice do arrau EX:
    $alunos["nome"]= "Gabrielson", neste exemplo o valor "Gabrielson" está associado à chave "nome" -->