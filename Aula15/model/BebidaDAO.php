<?php
require_once __DIR__ . '/Bebida.php';

class BebidaDAO {
    private $bebidasArray = [];
    private $arquivoJson = __DIR__ . '/../../bebidas.json';

    public function __construct(){
        if(file_exists($this->arquivoJson)){
            $conteudoArquivo = file_get_contents($this->arquivoJson);
            $dadosArquivoEmArray = json_decode($conteudoArquivo, true);

            if ($dadosArquivoEmArray){
                foreach ($dadosArquivoEmArray as $nome => $info){
                    $this->bebidasArray[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }

    private function salvarArquivo(){
        $dadosParaSalvar = [];
        foreach ($this->bebidasArray as $nome => $bebida){
            $dadosParaSalvar[$nome] = [
                'nome' => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume' => $bebida->getVolume(),
                'valor' => $bebida->getValor(),
                'qtde' => $bebida->getQtde()
            ];
        }
        
        $jsonFormatado = json_encode(
            $dadosParaSalvar, 
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        
        file_put_contents($this->arquivoJson, $jsonFormatado);
    }

    // CREATE
    public function criarBebida(Bebida $bebida){
        $this->bebidasArray[$bebida->getNome()] = $bebida;
        $this->salvarArquivo();
    }

    // READ
    public function lerBebidas(){
        return $this->bebidasArray;
    }
    
    // UPDATE 
    public function atualizarBebida($nome, $novoValor, $novaQtde){
        if(isset($this->bebidasArray[$nome])){
            $this->bebidasArray[$nome]->setValor($novoValor);
            $this->bebidasArray[$nome]->setQtde($novaQtde);
            $this->salvarArquivo();
            return true;
        }
        return false;
    }

    // UPDATE NOME
    public function atualizarNomeBebida($nomeAntigo, $novoNome){
        if(isset($this->bebidasArray[$nomeAntigo])){
            $bebida = $this->bebidasArray[$nomeAntigo];
            $bebida->setNome($novoNome);
            unset($this->bebidasArray[$nomeAntigo]);
            $this->bebidasArray[$novoNome] = $bebida;
            $this->salvarArquivo();
            return true;
        }
        return false;
    }

    // UPDATE CATEGORIA E VOLUME
    public function atualizarCategoriaVolume($nome, $novaCategoria, $novoVolume){
        if(isset($this->bebidasArray[$nome])){
            $this->bebidasArray[$nome]->setCategoria($novaCategoria);
            $this->bebidasArray[$nome]->setVolume($novoVolume);
            $this->salvarArquivo();
            return true;
        }
        return false;
    }

    // DELETE
    public function excluirBebida($nome){
        if(isset($this->bebidasArray[$nome])){
            unset($this->bebidasArray[$nome]);
            $this->salvarArquivo();
            return true;
        }
        return false;
    }
}