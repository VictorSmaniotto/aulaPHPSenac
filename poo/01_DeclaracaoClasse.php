<?php

abstract class Forma
{
	public $tipoDeForma;
	
	public function imprimeForma()
	{
		echo $this->tipoDeForma . ' com Área de: ' . $this-> calculaArea() . '<hr>';
	}
	abstract public function calculaArea();

}

class Quadrado extends Forma
{
	public $lado;
	public function __construct(float $lado)
	{
		$this -> tipoDeForma = 'Quadrado';
		$this -> lado = $lado;
	}
	public function calculaArea()
	{
		return $this-> lado * $this-> lado;
	}
	
}

class Retangulo extends Forma
{

	public $base;
	public $altura;

	public function __construct(float $base, float $altura)
	{
		$this -> tipoDeForma = 'Retangulo';
		$this -> base = $base;
		$this -> altura = $altura;
	}
	
	public function calculaArea()
	{
		return $this -> base * $this -> altura;
	}
}

class Triangulo extends Forma
{
	public $base;
	public $altura;

	public function __construct(float $base, float $altura)
	{
		$this -> tipoDeForma = 'Triangulo';
		$this -> base = $base;
		$this -> altura = $altura;
	}

	public function calculaArea()
	{
		return $this -> base * $this -> altura / 2;
	}
}

$obj = new Quadrado(15);
$obj-> imprimeForma();

$obj1 = new Quadrado(100);
$obj1 -> imprimeForma();

$obj2 = new Retangulo(5,10);
$obj2 -> imprimeForma();


$obj3 = new Triangulo(10,2);
$obj3 -> imprimeForma();
?>