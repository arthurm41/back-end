<?php

namespace Aula13;

class AlunoDAO {
    private $alunos = [];
    private $arquivo = "alunos.json";

    public function __construct() {
        // Carrega dados do arquivo se existir
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);

            if (is_array($dados)) {
                foreach ($dados as $dado) {
                    $aluno = new Aluno($dado['id'], $dado['nome'], $dado['curso']);
                    $this->alunos[$aluno->getId()] = $aluno;
                }
            }
        }
    }

    public function criarAlunos(Aluno $aluno) {
        $this->alunos[$aluno->getId()] = $aluno;
        $this->salvarNoArquivo();
    }

    public function lerAlunos() {
        return $this->alunos;
    }

    public function atualizarAlunos($id, $novoNome, $novoCurso) {
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
            $this->salvarNoArquivo();
        }
    }

    public function excluirAlunos($id) {
        if (isset($this->alunos[$id])) {
            unset($this->alunos[$id]);
            $this->salvarNoArquivo();
        }
    }

    private function salvarNoArquivo() {
        $dados = [];
        foreach ($this->alunos as $aluno) {
            $dados[] = [
                'id' => $aluno->getId(),
                'nome' => $aluno->getNome(),
                'curso' => $aluno->getCurso()
            ];
        }
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
?>
