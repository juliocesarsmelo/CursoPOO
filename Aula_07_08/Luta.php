<?php

class Luta{

    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos Especiais
    public function Luta(){

    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }

    //Métodos
    public function marcarLuta(){

    }

    public function lutar(){
        
    }
}