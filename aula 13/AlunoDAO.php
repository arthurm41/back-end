<?php

class AlunoDAO{
    private $alunos = [];
    public function criarAlunos(Aluno $alunos){
        $this->alunos[$alunos->getId()] = $alunos;
    }
    public function lerAlunos(){
        return $this->alunos;
    }
    public function atualizarAlunos($id, $NovoNome, $NovoCurso){
        if (isset($this->alunos[$id])){
            $this->alunos[$id]->setNome($NovoNome);
            $this->alunos[$id]->setCurso($NovoCurso);
        }
    }
    public function excluirAlunos($id){
        unset($alunos[$id]);
        
    }
}
