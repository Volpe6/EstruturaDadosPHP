<?php

/**
 * Com a lista duplamente encadeada é possivel acessar o penúltimo nodo,
 * e excluir um nodo com apenas sua referência
 *
 * @author Drew
 * @since  10/02/2019
 */
class ListaDuplamenteEncadeada {
    
    /** @var Nodo */
    private $header;// apontamento para o primeiro elemento da lista
    
    /** @var Nodo*/
    private $trailer;// apontamento para o último elemento da lista
    private $iSize;  // tamanho da lista
    
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
     * Retorna se a lista esta vazia
     * 
     * @return boolean
     */
    public function isEmpty() {
        return $iSize == 0;
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
        return $this->header->getNext()->getElement();
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
        return $this->trailer->getPrev()->getElement();
    }
    
    /**
     * Adiciona um elemento na primeira posição da lista
     * 
     * @param type $oElement - elemento a ser adicionado
     */
    public function addFirst($oElement) {
        $this->addBetwenn($oElement, $this->header, $this->header->getNext);
    }
    
    /**
     * Adiciona um elemento na última posição da lista
     * 
     * @param type $oElement - elemento a ser adicionado
     */
    public function addLast($oElement) {
        $this->addBetwenn($oElement, $this->trailer->getPrev(), $this->trailer);
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
        return $this->remove($this->header->getNext());
    }

    /**
     * Remove o último elemento da lista
     * 
     * @return $Mixed
     */
    public function removeLast() {
        if($this->isEmpty()) {
            return null;
        }
        return $this->remove($this->trailer->getPrev());
    }

    /**
     * Adiciona um novo elemento entre dois nodos
     * 
     * @param type $oElemento - elemento a ser adicionado
     * @param Nodo $oPred     - nodo predecessor ao qual, irá ser adicionado o elemento
     * @param Nodo $oSuces    - nodo sucessor ao qual irá ser adicionado o elemento
     */
    private function addBetwenn($oElement, Nodo $oPred, Nodo $oSuces) {
        $oNewest = new Nodo($oElement, $oPred, $oSuces);
        $oPred->setNext($oNewest);
        $oSuces->setPrev($oNewest);
        $this->iSize++;
    }
    
    /**
     * Remove um nodo específico
     * 
     * @param Nodo $oNode - nodo a ser removido
     * @return $Mixed
     */
    private function remove(Nodo $oNode) {
        $oPredecessor = $oNode->getPrev();
        $oSucessor    = $oNode->getNext();
        $oPredecessor->setNext($oSucessor);
        $oSucessor->setPrev($oPredecessor);
        $this->iSize--;
        return $oNode->getElement();
    }
    
    /**
    * Mostra todos os elementos da lista
    * 
    * @return string
    */
    public function toString() {
       $sStringReturn = '(';
       $oWalk = $this->header->getNext();
       while($oWalk != $this->trailer) {
           $sStringReturn .= $oWalk->getElement();
           if($oWalk != $this->tail) {
               $sStringReturn .= ',';
           }
           $oWalk = $oWalk->getNext();
       }
       $sStringReturn .= ')';
       return $sStringReturn;
   }
   
   /**
    * Adiciona um novo elemento na posição informada
    * 
    * @param int   $iPosition - posição na qual o elemento será adicionado
    * @param mixed $oElement  - elemento a ser adicionado
    */
   public function add($iPosition, $oElement) {
       $this->checkIndex($iPosition, $this->size());
       $oNode = $this->searchNode($iPosition);
       $this->addBetwenn($oElement, $oNode->getPrev(), $oNode);
   }
   
   /**
    * Retorna o elemento de uma posição informada
    * 
    * @param int $iPosition posição da qual se quer o elemento
    * @return mixed
    */
   public function get($iPosition) {
       $this->checkIndex($iPosition, $this->size());
       return $this->searchNode($iPosition)->getElement();
   }
   
   /**
    * Adiciona um elemento na posição informada
    * 
    * @param type $iPosition - posição na qual adicionar o elemento
    * @param mixed $oElement - elemento a ser adicionado
    * @return mixed
    */
   public function set($iPosition, $oElement) {
       $this->checkIndex($iPosition, $this->size());
       $oNode = $this->searchNode($iPosition);
       $this->addBetwenn($oElement, $oNode, $oNode->getNext());
       $this->remove($oNode);
       return $oNode->getElement();
   }
   
   /**
    * Remove um nodo de uma posição informada
    * 
    * @param int $iPosition - posição da qual remover o nodo
    * @return mixed
    */
   public function removeNode($iPosition) {
       $this->checkIndex($iPosition, $this->size());
       return $this->remove($this->searchNode($iPosition));
   }
   
   /**
    * Retorna o nodo de uma posição informada
    * 
    * @param int $iPosition - posição da qual se quer o nodo
    * @return Nodo
    */
   private function searchNode($iPosition) {
       if($iPosition == 0) {
           return $this->header->getNext();
       }
       if($iPosition == $this->size()) {
           return $this->trailer->getPrev();
       }
       $iCount = 0;
       $oWalk  = $this->header->getNext();
       if($oWalk != trailer) {
           if($iCount == $iPosition) {
               return $oWalk;
           }
           $iCount++;
           $oWalk = $oWalk->getNext();
       }
       return null;
   }
   
   /**
    * Verifica se o indice passado é possível de ser acessado
    * 
    * @param int $iIndex - indice a ser verificado
    * @param int $iSize  - tamanho da lista
    * @throws Exception
    */
   private function checkIndex($iIndex, $iSize) {
       if($iIndex < 0 || $iIndex >= $iSize) {
           throw new Exception('Posição ilegal '.$iIndex);
       }
   }
}

class Nodo {
    private $oElement;//elemento armazenado no nodo
    private $oNext;   //referência ao próximo nodo
    private $oPrev;   //referência ao nodo anterior
    
    public function __construct($oElement, Nodo $oPrev, Nodo $oNext) {
        $this->oElement = $oElement;
        $this->oPrev    = $oPrev;
        $this->oNext    = $oNext;
    }
    
    public function getElement() {
        return $this->oElement;
    }
    
    public function getNext() {
        return $this->oNext;
    }
    
    public function getPrev() {
        return $this->oPrev;
    }
    
    public function setNext($oNext) {
        $this->oNext = $oNext;
    }
    
    public function setPrev($oPrev) {
        $this->oPrev = $oPrev;
    }
}
