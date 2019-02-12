<?php

/**
 * Estrutura de dados pilha, onde o último elemento inserido é o primeiro a ser 
 * removido
 *
 * @author Drew
 */
class PilhaEncadeada implements Pilha {
    
    /** @var ListaSimplesmenteEncadeada */
    private $ListaSimplesmenteEncadeada;
    
    /**
     * Verifica se pilha esta vazia
     *  
     * @return boolean
     */
    public function isEmpty() {
        return $this->getListaSimplesmenteEncadeada()->isEmpty();
    }

    /**
     * Remove o elemento do topo da pilha
     * 
     * @return mixed
     */
    public function pop() {
        return $this->getListaSimplesmenteEncadeada()->removeFirst();
    }

    /**
     * Isere um elemento na pilha
     * 
     * @param mixed $oElement - elemento a ser adicionada
     */
    public function push($oElement) {
        $this->getListaSimplesmenteEncadeada()->addFirst($oElement);
    }

    /**
     * Retorna o tamanho da pilha
     * 
     * @return int
     */
    public function size() {
        return $this->getListaSimplesmenteEncadeada()->size();
    }

    /**
     * Retorna o elemento do topo da pilha
     * 
     * @return mixed
     */
    public function top() {
        return $this->getListaSimplesmenteEncadeada()->first();
    }

    /** @return ListaSimplesmenteEncadeada */
    private function getListaSimplesmenteEncadeada() {
        if(!isset($this->ListaSimplesmenteEncadeada)) {
            $this->ListaSimplesmenteEncadeada = new ListaSimplesmenteEncadeada();
        }
        return $this->ListaSimplesmenteEncadeada;
    }
}
