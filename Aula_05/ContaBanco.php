<?php

class ContaBanco {

    /* =========  Atributos ========= */

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    /* =========  Método Construtor ========= */

    public function ContaBanco(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada com Sucesso!!!</p>";
    }

    /* =========  Funções ========= */

    public function abrirConta($tipoConta){

        $this->setTipo($tipoConta);
        $this->setStatus(true);

        if($tipoConta == "CC"){
            $this->setSaldo(50);
        } else if($tipoConta == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0 || $this->getSaldo() < 0){
            echo "Fechamento de Conta Inválido!!!\n
                  Possíveis causas:\n
                  [Existência de Saldo, necessário sacar],\n
                  [Saldo Negativo, necessário quitar a situação] ";
        }else{
            $this->setStatus(false); 
            echo "<p>Conta de {$this->getDono()} fechada!!!</p>";
        }
    }

    public function depositar($valorDeposito){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo()+$valorDeposito);
        }else{
            echo "<p>Conta Inativa!!!</p>";
        }
    }

    public function sacar($valorSacar){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $valorSacar){
                $this->setSaldo($this->getSaldo() - $valorSacar);
                echo "<p>Saque autorizado na conta: {$this->getNumConta()}, Dono(a):{$this->getDono()}</p>";
            }else{
                echo "Saldo Insuficiente!!!";
            }   
        }else{
            echo "Conta Desativada!!!";
        }
    }

    public function pagarMensal(){
        $valorMensal;

        if($this->getTipo() == "CC"){
            $valorMensal = 12;
        } else if($this->getTipo() == "CP"){
            $valorMensal = 20;
        }

        if($this->getStatus() == true){
            if($this->getSaldo() > $valorMensal){
                $this->setSaldo($this->getSaldo() - $valorMensal);
                echo "<p>Mensalidade de R$ $valorMensal debitada na Conta: {$this->getNumConta()}, Dono(a):{$this->getDono()} </p>";
            }else{
                echo "Saldo insuficiente!!!";
            }
        } else {
            echo "Conta Desativada!!!";
        }
    }

    /* =========  Métodos Getters e Setters ========= */

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }
}