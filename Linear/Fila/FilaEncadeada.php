<?php

/**
 * Estrutura de dados fila, onde o primeiro elemento inserido é o primeiro a ser 
 * removido
 *
 * @author Drew
 * @since  12/02/2019
 */
class FilaEncadeada implements Fila {

     /** @var ListaSimplesmenteEncadeada */
    private $ListaSimplesmenteEncadeada;
    
    /**
     * Remove o primeiro elemento da fila
     * 
     * @return mixed
     */
    public function dequeue() {
        return $this->getListaSimplesmenteEncadeada()->removeFirst();
    }

    /**
     * Insere um novo elemento na fila
     * 
     * @param mixed
     */
    public function enqueue($oElmento) {
        $this->getListaSimplesmenteEncadeada()->addLast($oElmento);
    }
    
    /**
     * Retorna o primeiro elemento da fila
     * 
     * @return mixed
     */
    public function first() {
        return $this->getListaSimplesmenteEncadeada()->first();
    }

    /**
     * Verifica se a fila esta vazia
     * 
     * @return boolean
     */
    public function isEmpty() {
        return $this->getListaSimplesmenteEncadeada()->isEmpty();
    }

    /**
     * Retorna o tamanho atual da fila
     * 
     * @return int
     */
    public function size() {
        return $this->getListaSimplesmenteEncadeada()->size();
    }
    
    public function __toString() {
        return $this->getListaSimplesmenteEncadeada()->toString();;
    }
    
    /** @return ListaSimplesmenteEncadeada */
    public function getListaSimplesmenteEncadeada() {
        if(!isset($this->ListaSimplesmenteEncadeada)) {
            $this->ListaSimplesmenteEncadeada = new ListaSimplesmenteEncadeada();
        }
        return $this->ListaSimplesmenteEncadeada;
    }

}
