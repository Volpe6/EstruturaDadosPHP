<?php

/**
 * Interface da estrutura de dados lista
 * 
 * @author Drew
 * @since  12/02/2019
 */
interface Lista {
    
    /**
     * Retorna o tamanho da lista
     */
    public function size();
    
    /**
     * Verifica se a lista esta vazia
     */
    public function isEmpty();
    
    /**
     * Retorna um elemto do índice informado
     * 
     * @param int $iIndice - índice do elemento a ser recuperado
     */
    public function get($iIndice);
    
    /**
     * Insere um novo elemento no índice informado
     * 
     * @param int   $iIndice  - índice no qual se quer inserir um novo elemento
     * @param mixed $oElement - elemento a ser inserido
     */
    public function set($iIndice, $oElement);
    
    /**
     * Adiciona um novo elemento na lista
     * 
     * @param int   $iIndice  - índice no qual inserir o elemento
     * @param mixed $oElement - elemento a ser inserido
     */
    public function add($iIndice, $oElement);
    
    /**
     * Remove o elemento do índice informado
     * 
     * @param int $Indice - índice do elemento a ser removido
     */
    public function remove($Indice);
}
