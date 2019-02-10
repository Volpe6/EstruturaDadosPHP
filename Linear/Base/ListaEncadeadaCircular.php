<?php

/**
 * Uma lista de tamanho dinamico onde cada nodo armazena os dados 
 * do elemento e uma referência ao próximo nodo, onde o ultimo nodo aponta para 
 * o primeiro. Na lista encadeada circular não é necessária uma referência para
 * head, pois para obter o elemento da primeira posição basta pegar o próximo 
 * elemento da ultima posição.
 *
 * @author Drew
 * @since  09/02/2019
 */
class ListaEncadeadaCircular {
    
    /** @var Nodo */
    private $tail; // aponta para o último elemento da lista
    private $iSize; // tamanho da lista
    
    /**
     * Retorna o tamanho da lista
     * 
     * @return int
     */
    public function size() {
        if($this->isEmpty()) {
            return 0;
        }
        return $this->iSize;
    }
    
    /**
     * Retorna se lista esta vazia
     * 
     * @return boolean
     */
    public function isEmpty() {
        return $this->iSize == 0;
    }
    
    /**
     * Retorna o primeiro elemento da lista
     * 
     * @return $Mixed
     */
    public function first() {
        if($this->isEmpty()) {
            return null;
        }
        return $this->tail->getNext()->getElement();
    }
    
    /**
     * Retorna o último elemento da lista
     * 
     * @return $Mixed
     */
    public function last() {
        if($this->isEmpty()) {
            return null;
        }
        return $this->tail->getElement();
    }
    
    /**
     * Atualiza a referência ao tail
     */
    public function rotate() {
        if($this->tail != null) {
            $this->tail = $this->tail->getNext();
        }
    }
    
    /**
     * Adiciona um novo elemento na primeira posição da lista
     * 
     * @param type $mixed - elemento qualquer a ser adicionado na lista
     */
    public function addFirst($mixed) {
        /* Se esta vazio tail recebe um novo nodo e seta-se o próximo nodo de 
         * tail com o próprio tail, pois tail neste momento é o primeiro e o
         * último elemento, caso contrário seta-se apenas o próximo nodo de tail
         * com o novo elemento
         */
        if($this->isEmpty()) {
            $this->tail = new Nodo($mixed, null);  
            $this->tail->setNext($this->tail);
        } else {
            $oNewest = new Nodo($mixed, $this->tail->getNext());
            $this->tail->setNext($oNewest);
        }
        $this->iSize++;// atualiza-se o tamanho da lista
    }
    
    /**
     * Adiciona um novo elemento no final da lista
     * 
     * @param type $mixed - elemento qualquer a ser adicionado na lista
     */
    public function addLast($mixed) {
        $this->addFirst($mixed);
        $this->tail = $this->tail->getNext();
    }
    
    /**
     * Remove o primeiro elemento da lista
     * 
     * @return $Mixed
     */
    public function removeFirst() {
        if($this->isEmpty()) {
            return null;
        }
        $oHead = $this->tail->getNext();
        if($oHead == $this->tail) {
            $this->tail = null;
        } else {
            $this->tail->setNext($oHead->getNext());
        }
        $this->iSize--;
        return $oHead->getElement();
    }
    
    /**
    * Mostra todos os elementos da lista
    * 
    * @return string
    */
    public function toString() {
        if($this->isEmpty()) {
            return '()';
        }
        $sStringReturn  = '(';
        $oWalk          = $this->tail->getNext();
        $sStringReturn .= $oWalk->getElement();
        while($oWalk != $this->tail) {
            if($oWalk != $this->tail) {
                $sStringReturn .= ',';
            }
            $oWalk          = $oWalk->getNext();
            $sStringReturn .= $oWalk->getElement();
        }
//        do {
//            $oWalk          = $oWalk->getNext();
//            $sStringReturn .= $oWalk->getElement();
//            if($oWalk !=  $this->tail) {
//                $sStringReturn .= ',';
//            }
//        } while($oWalk != $this->tail);
        $sStringReturn .= ')';
        return $sStringReturn;
    }
}

/**
 * Nodo da interno da lista simplesmente encadada
 *
 * @author Drew
 * @since  10/02/2019
 */
class Nodo {
    private $oElement; // elemento armazenado no nodo
    private $oNext;      // referência ao proximo nodo
    
    public function __construct($oElement, $oNext) {
        $this->oElement = $oElement;
        $this->oNext    = $oNext;
    }
    
    /**
     * Retorna o elemento
     * 
     * @return $Mixed
     */
    public function getElement() {
        return $this->oElement;
    }
    
    /**
     * Retorna a referência ao próximo nodo
     * 
     * @return Nodo
     */
    public function getNext() {
        return $this->oNext;
    }
    
    public function setNext($oNext) {
        $this->oNext = $oNext;
    }
}
