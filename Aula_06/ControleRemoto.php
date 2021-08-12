<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{

    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos Especiais
    public function ControleRemoto(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

    //Métodos Implementados 
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){

        echo "<br>======== MENU ========";
    
        echo "<br>Está Ligado ? " . ($this->getLigado() ? "SIM" : "NÃO");

        echo "<br>Está Tocando ? " . ($this->getTocando() ? "SIM" : "NÃO");

        echo "<br>Volume: " . $this->getVolume();
        
        for($i=0; $i <= $this->getVolume(); $i+=10){
        
            echo "-";
        }
        
        echo "<br>======================  <br>";
    }
    public function fecharMenu(){
        echo "<br>Fechando Menu ...";

    }
    public function maisVolume(){
        if(getLigado()){
            $this->setVolume(getVolume() + 5);
        }
    }
    public function menosVolume(){
        if(getLigado() && !(getVolume() <= 0)){
            $this->setVolume(getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if(getLigado() && getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if(getLigado() && getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if(getLigado() && !(getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getligado() && getTocando()){
            $this->setTocando(false);
        }
    }
}


