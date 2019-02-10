<?php

/**
 * Uma lista de tamanho dinamico onde cada nodo armazena os dados 
 * do elemento e uma referência ao próximo nodo.
 *
 * @author Drew
 * @since  09/02/2019
 */
class ListaSimplesmenteEncadeada {

    /** @var Nodo */
   private $head; //  aponta para o primeiro elemento da lista
   /** @var Nodo */
   private $tail; // aponta para último elemento da lista
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
    * Retorna se a lista esta vazia
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
       return $this->head->getElement();
   }
   
   /**
    * Retorna o ultimo elemento da lista
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
    * Adiciona um elemento no inicio da lista
    * 
    * @param type $mixed - elemento qualquer a ser adicionado na lista
    */
   public function addFirst($mixed) {
       $this->head = new Nodo($mixed, $this->head);
       if($this->isEmpty()) { // verifica se a lista esta vazia
           // se estiver, o fim da lista recebe o mesmo elemento, pois como possui
           // apenas um elemento o fim e o inicio são o mesmo
           $this->tail = $this->head;
       }
       $this->iSize++;// incrementa-se o tamanho da lista
   }
   
   /**
    * Adiciona um elemento no fim da lista
    * 
    * @param type $mixed - elemento qualquer  a ser adicionado na lista
    */
   public function addLast($mixed) {
       $oNewest = new Nodo($mixed, null);// cria um novo elemento
       
       /*  verifica se esta vazio se estive adiciona o novo elemento como
        *  como primeiro da lista, caso contrario seta o novo elemeto como o 
        *  proximo de tail, entao o novo elemento passa a ser o último,
        *  então tail recebe o novo elemento
        */
       if($this->isEmpty()) {// verifica se esta vazio, se
           $this->head = $oNewest;
       } else {
           $this->tail->setNext($oNewest);
       }
       $this->tail = $oNewest;
       $this->iSize++; // incrementa-se o tamanho da lista
   }
   
   /**
    * Remove o primeiro elemento da lista
    * 
    * @return type
    */
   public function removeFirst() {
       if($this->isEmpty()) {
           return null;
       }
       $oAnswer    = $this->head->getElement();
       $this->head = $this->head->getNext();
       $this->iSize--;
       if($this->isEmpty()) {
           $this->tail = null;
       }
       return $oAnswer;
   }
   
   /**
    * Mostra todos os elementos da lista
    * 
    * @return string
    */
   public function toString() {
       $sStringReturn = '(';
       $oWalk = $this->head;
       while($oWalk != null) {
           $sStringReturn .= $oWalk->getElement();
           if($oWalk != $this->tail) {
               $sStringReturn .= ',';
           }
           $oWalk = $oWalk->getNext();
       }
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
    private $oNext;    // referência ao proximo nodo
    
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
