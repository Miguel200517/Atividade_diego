<?php
    class ContaBancaria
    {
        public $nomeTitular;
        public $numeroConta;
        public $numeroSaldo;
    

        public function __construct($nome, $nun,$saldo)
        {   
            $this->nomeTitular = $nome;
            $this->numeroConta = $nun;
            $this->numeroSaldo = $saldo;

        } 
        public function depositar($valor){
            return $this->numeroSaldo + $valor;
        }
        public function sacar($valor){
            return $this->numeroSaldo - $valor;
        }

    }