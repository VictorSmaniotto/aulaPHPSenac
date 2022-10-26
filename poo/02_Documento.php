<?php
abstract class Documento
{
    protected string $numero;

    abstract public function eValido();
    abstract public function formata();

    public function setNumero($numero)
    {
        $this->numero = preg_replace('/[^0-9]/is', '', $numero);
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function calculaModulo11($qtdNumeros, $peso)
    {
        $digito = 0;
        $somatorio = 0;
        $documento = substr($this->getNumero(), 0, $qtdNumeros);

        for ($index = 0; $index < $qtdNumeros; $index++) {
            $somatorio += $documento[$index] * $peso--;
            if($peso < 2)
            {
                $peso = 9;
            }
        }

        $modulo11 = $somatorio % 11;
        $digito = 11 - $modulo11;

        if ($digito > 9) {
            $digito = 0;
        }

        return $digito;
    }
}

class CPF extends Documento
{

    public function __construct(string $numero)
    {
        $this->setNumero($numero);
        if (strlen($this->getNumero()) != 11) {
            return false;
        }
    }
    public function eValido()
    {
        $digitoX = $this->calculaModulo11(9, 10);
        $digitoY = $this->calculaModulo11(10, 11);

        $cpfCalculado = substr($this->getNumero(), 0, 9);
        $cpfCalculado = $cpfCalculado . $digitoX . $digitoY;

        if ($this->getNumero() == $cpfCalculado) {
            return true;
        } else {
            return false;
        }
    }
    public function formata()
    {
        return substr($this->getNumero(), 0, 3) . '.' .
            substr($this->getNumero(), 3, 3) . '.' .
            substr($this->getNumero(), 6, 3) . '-' .
            substr($this->getNumero(), 9, 2);
    }
}


class CNPJ extends Documento
{

    public function __construct(string $numero)
    {
        $this->setNumero($numero);
        if (strlen($this->getNumero()) != 14) {
            return false;
        }
    }
    public function eValido()
    {


        $digitoX = $this->calculaModulo11(12, 5);
        $digitoY = $this -> calculaModulo11(13,6);

        $cnpjCalculado = substr($this->getNumero(), 0, 12);
        $cnpjCalculado = $cnpjCalculado. $digitoX . $digitoY;
        if ($this->getNumero() == $cnpjCalculado) {
            return true;
        } else {
            return false;
        }
       
    }
    public function formata()
    {
        return substr($this->getNumero(), 0, 2) . '.' .
            substr($this->getNumero(), 2, 3) . '.' .
            substr($this->getNumero(), 5, 3) . '/' .
            substr($this->getNumero(), 8, 4) . '-' .
            substr($this->getNumero(), 12, 2);
    }
}

class CNH extends Documento
{
    private $categoria;

    public function __construct(string $numero, string $categoria)
    {
        $this->setNumero($numero);
        $this->setCategoria($categoria);
    }

    public function setCategoria($categoria)
    {
        $this->categoria = preg_replace('/[^A-Z]/', '', $categoria);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function eValido()
    {
    }

    public function formata()
    {
    }
}




$cpf = new CPF('501.479.628-11');
if ($cpf->eValido()) {
    echo "CPF Válido";
} else {
    echo "CPF Inválido";
}

echo "<br> CPF: " . $cpf->formata();

echo "<hr>";

$cpfVictor = new CPF('460.699.988-80');
if ($cpfVictor->eValido()) {
    echo "CPF Válido";
} else {
    echo "CPF Inválido";
}

echo "<br> CPF: " . $cpfVictor->formata();

echo "<hr>";

$cnpj = new CNPJ('03.709.814/0025-65');

echo $cnpj->formata();
echo "<br>";
if ($cnpj->eValido()) {
    echo "CNPJ: Válido";
} else {
    echo "CNPJ: Inválido";
}
