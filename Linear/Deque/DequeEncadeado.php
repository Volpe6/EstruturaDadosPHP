<?php

/**
 * O deque é uma fila com inserção e remoção dos dois lados
 *
 * @author Drew
 * @since  12/02/2019
 */
class DequeEncadeado implements Deque {
    
    
    /** @var ListaDuplamenteEncadeada */
    private $ListaDuplamenteEncadeada;
    
    /**
     * Adiciona um novo elemento no inicio do deque
     * 
     * @param mixed $oElement - elemento a ser adicionado
     */
    public function addFirst($oElement) {
        $this->getListaDuplamenteEncadeada()->addFirst($oElement);
    }

    
    /**
     * Adiciona um novo elemento no fim do deque
     * 
     * @param mixed $oElement - elemento a ser adicionado
     */
    public function addLast($oElement) {
        $this->getListaDuplamenteEncadeada()->addLast($oElement);;
    }

    /**
     * Retorna o primeiro elemento do deque
     * 
     * @return mixed
     */
    public function first() {
        return $this->getListaDuplamenteEncadeada()->first();
    }

    /**
     * Retorna o último elemento do deque
     * 
     * @return mixed
     */
    public function last() {
        return $this->getListaDuplamenteEncadeada()->last();
    }
    
    /**
     * Verifica se o deque esta vazio
     * 
     * @return boolean 
     */
    public function isEmpty() {
        return $this->getListaDuplamenteEncadeada()->isEmpty();
    }

    /**
     * Remove o primeiro elemento da lista, e retorna o elemento removido
     * 
     * @return mixed
     */
    public function removeFirst() {
        return $this->getListaDuplamenteEncadeada()->removeFirst();
    }

    /**
     * Remove o último elemento da lista, e retorna o elemento removido
     * 
     * @return mixed
     */
    public function removeLast() {
        return $this->getListaDuplamenteEncadeada()->removeLast();
    }

    /**
     * Retorna o tamanho do deque
     * 
     * @return int 
     */
    public function size() {
        return $this->getListaDuplamenteEncadeada()->size();
    }
    
    /** @return ListaDuplamenteEncadeada */
    private function getListaDuplamenteEncadeada() {
        if(!isset($this->ListaDuplamenteEncadeada)) {
            $this->ListaDuplamenteEncadeada = new ListaDuplamenteEncadeada();
        }
        return $this->ListaDuplamenteEncadeada;
    }

}
