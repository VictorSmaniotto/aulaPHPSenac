<?php

function soma($num1, $num2)
{
    $total = $num1 + $num2;
    return $total;
};

function multiplicacao($num1, $num2)
{
    $total = $num1 * $num2;
    return $total;
};

function divisao($num1, $num2)
{
    $total = $num1 / $num2;
    return $total;
};

function subtracao($num1, $num2)
{
    $total = $num1 - $num2;
    return $total;
};

function inverte_data($data){
    $dt_array = array_reverse(explode('/', $data));
    return $dt_array[0].'-'.$dt_array[1].'-'.$dt_array[2];

};

function verifica_par_ou_impar($num)
{
    if($num % 2 == 0)
    {
        return 'Par';
    };
    return 'Ímpar';
}

function par_ou_impar2($num)
{
    return ($num % 2 == 0)? 'Par':'Ímpar';
    
}

function geradorDeSenhaComFor($senhaInicial=1, $senhaFinal=10)
{
    for($contador = $senhaInicial; $contador <= $senhaFinal; $contador++)
    {
        echo $contador.'-';
    }
}

function geradorDeSenhaComWhile($senhaInicial=2, $senhaFinal=20)
{
    $contador = $senhaInicial;
    while( $contador <= $senhaFinal)
    {
        echo $contador.'-';
        $contador++;
    }
}

echo "Função Soma: <br>";
echo soma(5,50);
echo "<br>";
echo "<hr>";

echo "Função Subtração: <br>";
echo subtracao(5,188);
echo "<br>";
echo "<hr>";

echo "Função Multiplicação: <br>";
echo multiplicacao(5,255);
echo "<br>";
echo "<hr>";

echo "Função Divisão: <br>";
echo divisao(115,5);
echo "<br>";
echo "<hr>";

echo "Função Par ou Impar <br>";
echo verifica_par_ou_impar(6);
echo "<br>";
echo "<hr>";

echo "Função Par ou Impar 2 <br>";
echo par_ou_impar2(13);
echo "<br>";
echo "<hr>";

echo "Função Inverter Data <br>";
echo inverte_data("25/07/1998");
echo "<br>";
echo "<hr>";

echo "Função Gerador de Senha com For <br>";
echo geradorDeSenhaComFor();
echo "<br>";
echo "<hr>";

echo "Função Gerador de Senha com While <br>";
echo geradorDeSenhaComWhile();
echo "<br>";
echo "<hr>";