<?php

/**
 * Description of Caneta
 *
 * @author Drew
 */
class Caneta {
    private $modelo;
    private $ponta;
    private $carga;
    private $tampada;
    
    public function __construct($sModelo) {
        $this->modelo  = $sModelo;
        $this->carga   = 0;
        $this->ponta   = 0.5;
        $this->tampada = true;
    }
    
    public function setModelo($model) {
        $this->modelo = $model;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }
    
    public function getPonta() {
        $this->ponta;
    }
    
    public function setCarga($carga) {
        $this->carga = $carga;
    }
    
    public function getCarga() {
        return $this->carga;
    }
    
    public function setTampada($tampada) {
        $this->tampada = $tampada; 
    }
    
    public function getTampada() {
        return $this->tampada;
    }

    public function rabiscar() {
        
        if($this->getTampada()) {
            echo 'erro tampada';
        } else {
            echo 'estou rabiscando';
        }
    }
    
    public function tampar() {}
    
    public function destampar() {}
    
    public function __toString() {
        return $this->getModelo();
    }
}
