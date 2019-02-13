<?php

/**
 * Etrutura de dados que permite inserção e remoção de elemento em posições não 
 * pré-definidas
 *
 * @author Drew
 */
class ListaEncadeada implements Lista {
    
    /** @var ListaDuplamenteEncadeada */
    private $ListaDuplamenteEncadeada;


    /**
     * Adiciona um novo elemento no indice especificado
     * 
     * @param int   $iIndice  - índice no qual inserir o elemento
     * @param mixed $oElement - elemento a ser inserido
     */
    public function add($iIndice, $oElement) {
        $this->getListaDuplamenteEncadeada()->add($iIndice, $oElement);
    }

    /**
     * Retorna um elemento de índice especificado
     * 
     * @param int $iIndice - índice do elemento a ser pego
     */
    public function get($iIndice) {
        return $this->getListaDuplamenteEncadeada()->get($iIndice);
    }

    /**
     * Verifica se a lista esta vazia
     * 
     * @return boolean
     */
    public function isEmpty() {
        return $this->getListaDuplamenteEncadeada()->isEmpty();
    }

    /**
     * Remove o elemento de índice especificado
     * 
     * @param int $Indice - índice do elemento a ser removido
     * @return mixed
     */
    public function remove($Indice) {
        return $this->getListaDuplamenteEncadeada()->removeNode($Indice);
    }

    /**
     * Insere um elemento na posição especificada, removendo o elemento que a
     * ocupava anteriormente
     * 
     * @param int   $iIndice  - índice do elemeto a ser inserido
     * @param mixed $oElement - elemento a ser inserido
     * @return mixed
     */
    public function set($iIndice, $oElement) {
        return $this->getListaDuplamenteEncadeada()->set($iIndice, $oElement);
    }

    /**
     * Retorna o tamanho da lista
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
