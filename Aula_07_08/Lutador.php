<?php

class Lutador{

    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos Especiais
    public function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }

    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    private function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    private function getIdade()
    {
        return $this->idade;
    }

    private function setIdade($idade)
    {
        $this->idade = $idade;
    }

    private function getAltura()
    {
        return $this->altura;
    }

    private function setAltura($altura)
    {
        $this->altura = $altura;
    }

    private function getPeso()
    {
        return $this->peso;
    }

    private function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if($this->peso < 52.2 ){
            $this->categoria = "Inválido";
        }else if($this->peso <= 70.3 ){
            $this->categoria = "Leve";
        } else if($this->peso <= 83.9 ){
            $this->categoria = "Médio";
        } else if($this->peso <= 120.2 ){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        } 
    }

    private function getVitorias()
    {
        return $this->vitorias;
    }

    private function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    private function getDerrotas()
    {
        return $this->derrotas;
    }

    private function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    private function getEmpates()
    {
        return $this->empates;
    }

    private function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    // Métodos
    public function apresentar(){
        echo "===============================<br>";
        echo "CHEGOU A HORA !!!! <br><br>";
        echo "Lutador: {$this->getNome()} <br>";
        echo "Origem: {$this->getNacionalidade()} <br>";
        echo "Idade: {$this->getIdade()} <br>";
        echo "Altura: {$this->getAltura()} <br>";
        echo "Peso: {$this->getPeso()} <br>";
        echo "Vitórias: {$this->getVitorias()} <br>";
        echo "Derrotas: {$this->getDerrotas()} <br>";
        echo "Empates: {$this->getEmpates()} <br>";
        echo "===============================<br><br>";
    }
    public function status(){
        echo "{$this->getNome()} é um peso <b>{$this->getCategoria()}</b> com {$this->getVitorias()} <b>Vitórias</b>, {$this->getDerrotas()} <b>Derrotas</b> e {$this->getEmpates()} <b>Empates</b> !!!";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }


}