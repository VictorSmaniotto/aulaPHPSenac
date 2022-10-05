<?php

#UC7 - Elabore um sistema em PHP para o Diagrama de Classe conta e tipo de conta

abstract class Conta
{
    private $tipoDeConta;
    public function getTipoDeConta()
    {
        return $this->tipoDeConta;
    }
    public function setTipoDeConta(string $tipoDeConta)
    {
        $this-> tipoDeConta = $tipoDeConta;
    }

    public $agencia;
    public $numConta;
    protected $saldo;

    public function deposito($valor)
    {
        //  $this->saldo += $valor;
         if($valor <= 0)
         {
            echo "Valor de deposito inválido <br>";
         } else
         {
            $this->saldo += $valor;
            echo "Deposito realizado com sucesso!!! <br>";
         }
    }
    public function saque($valor)
    {
        //  $this->saldo -= $valor;
         if($this-> saldo >= $valor )
         {
            $this-> saldo -= $valor;
            echo "Saque realizado com sucesso <br>";
         } else
         {
             echo "Saldo insuficiente!!! <br>";
         }
    }
    public function imprimeExtrato()
    {
        echo 'CONTA: ' . $this->tipoDeConta . ' Agencia: ' . $this->agencia . ' Conta: ' . $this->numConta . ' Saldo: ' . $this->calculaSaldo();
    }
    abstract public function calculaSaldo();

    
}

class Poupanca extends Conta
{
    public $reajuste;
    public function __construct(string $agencia,string $numConta,float $reajuste)
    {
        $this-> setTipoDeConta('Poupança');
        $this-> agencia = $agencia;
        $this-> numConta = $numConta;
        $this-> reajuste = $reajuste;
    }

    public function calculaSaldo()
    {
        return $this->saldo + ($this->saldo * $this->reajuste / 100);
    }

    
}

class Especial extends Conta
{
    public $saldoEspecial;
    public function __construct(string $agencia,string $numConta, float $saldoEspecial)
    {
        $this-> setTipoDeConta('Especial');
        $this-> agencia = $agencia;
        $this-> numConta = $numConta;
        $this-> saldoEspecial = $saldoEspecial;
    }

    public function calculaSaldo()
    {
        return $this->saldo + $this->saldoEspecial;
    }
}


$ctaPoup = new Poupanca('0002-7', '85588-88', 0.54);
// $ctaPoup -> saldo = -1500;
$ctaPoup-> deposito(1500);
$ctaPoup-> saque(3000);
$ctaPoup-> imprimeExtrato();
echo "<hr>";
$ctaEspecial = new Especial('0055-2', '75588-42', 2300);
$ctaEspecial-> deposito(1500);
$ctaEspecial-> imprimeExtrato();