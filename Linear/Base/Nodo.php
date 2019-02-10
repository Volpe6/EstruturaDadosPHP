<?php
/**
 * Nodo da interno da lista simplesmente encadada
 *
 * @author Drew
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
