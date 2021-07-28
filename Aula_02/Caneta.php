<?php

class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if($this->tampada == true){
            echo "ERRO! Não posso rabiscar!";
        }else{
            echo "Posso rabiscar";
        }
    }

    function tampar(){
        $this->tampada = true;
    }
    
    function destampar(){
        $this->tampada = false;
    }
}