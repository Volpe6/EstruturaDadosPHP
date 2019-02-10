<?php

/**
 * Interface que define todos os método comuns a estrutura de dados pilha
 *
 * @author Drew
 */
interface Pilha {
    /**
     * Retorna o tamanho da pilha
     */
    public function size();
    
    /**
     * Verifica se a pilha esta vazia
     */
    public function isEmpty();
    
    /**
     * Insere um elemento na pilha
     */
    public function push();
    
    /**
     * Retorna o elemento no topo da pilha
     */
    public function top();
    
    /**
     * Remove o elemento no topo da pilha
     */
    public function pop();
}
