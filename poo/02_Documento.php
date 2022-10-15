<?php
abstract class Documento
{
    protected string $numero;

    abstract public function eValido();
    abstract public function formata();

    public function setNumero($numero)
    {
        $this-> numero = preg_replace('/[^0-9]/','',$numero);
    }

    public function getNumero()
    {
        return $this->numero;
    }
    
    
}

class CPF extends Documento
{

    public function __construct(string $numero)
    {
       $this->setNumero($numero);
        
        

    }
    public function eValido()
    {

    }
    public function formata()
    {
        return substr($this->getNumero(), 0, 3). '.' .
               substr($this->getNumero(), 0, 3). '.' .
               substr($this->getNumero(), 0, 3). '-' .
               substr($this->getNumero(), 0, 2);
    }
}


class CNPJ extends Documento
{

    public function __construct(string $numero)
    {
        $this-> setNumero($numero);
        
    }
    public function eValido()
    {

    }
    public function formata()
    {

    }
}

class CNH extends Documento
{
    private $categoria;

    public function __construct(string $numero, string $categoria)
    {
        $this-> setNumero($numero);
        $this-> setCategoria($categoria);
        
    }

    public function setCategoria($categoria)
    {
        $this-> categoria = preg_replace('/[^A-Z]/','',$categoria);
    }

    public function getCategoria()
    {
        return $this-> categoria;
    }

    public function eValido()
    {

    }

    public function formata()
    {

    } 
}



$cpf = new CPF('999.999.999-99');
echo 'CPF: '.$cpf->formata();
echo '<br>';
$cpf->setNumero('CPF:123.456.789.10' );
echo 'CPF: '.$cpf->formata();
echo '<br>';

$cnpj = new CNPJ('00.999.888/0025-45');
echo 'CNPJ: '.$cnpj->getNumero();
echo '<br>';
$cnpj ->setNumero('CPNJ: 12.345.678/0099-10');
echo 'CNPJ: '.$cnpj->getNumero();
echo '<br>';

$cnh = new CNH('1472583', 'A1');
echo 'CNH: '.$cnh->getNumero() . ' ';
echo  $cnh->getCategoria();
echo '<br>';
$cnh -> setNumero('7894562');
$cnh -> setCategoria('AB');
echo 'CNH: '. $cnh->getNumero().' ';
echo $cnh->getCategoria();


