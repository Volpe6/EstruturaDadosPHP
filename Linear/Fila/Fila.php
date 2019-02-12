<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Interface que define todos os método comuns a estrutura de dados fila
 * 
 * @author Drew
 * @since  12/02/2019
 */
interface Fila {
    /**
     * Retorna o tamanho da fila
     */
    public function size();
    
    /**
     * Verifica se a fila esta vazia
     */
    public function isEmpty();
    
    /**
     * O método enqueue(enfileirar) adiciona novos elementos na fila
     * 
     * @param mixed $oElmento - elemento a ser adicionado na fila
     */
    public function enqueue($oElmento);
    
    /**
     * Retorna o primeiro elemento da fila
     */
    public function first();
    
    /**
     * O método dequeue(desenfileirar) remove um elemento da fila
     */
    public function dequeue();
}
