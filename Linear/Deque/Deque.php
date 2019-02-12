<?php

/**
 * Interface que define todos os métodos comuns a estrutura de dados deque
 * 
 * @author Drew
 * @since  12/02/2019
 */
interface Deque {
    /**
     * Retorna o tamanho do deque
     */
    public function size();
    
    /**
     * Verifica se a lista esta vazia
     */
    public function isEmpty();
    
    /**
     * Retorna o primeiro elemento do deque
     */
    public function first();
    
    /**
     * Retorna o último elemento do deque
     */
    public function last();
    
    /**
     * Adiciona um novo elemento no inicio do deque
     * 
     * @param mixed $oElement - elemento a ser adicionado no inicio do deque
     */
    public function addFirst($oElement);
    
    /**
     * Adiciona um novo elemento no fim do deque
     * 
     * @param type $oElement - elemento a ser adicionado no fim do deque
     */
    public function addLast($oElement);
    
    /**
     * Remove o primeiro elemento do deque
     */
    public function removeFirst();
    
    /**
     * Remove o último elemento do deque
     */
    public function removeLast();
}
