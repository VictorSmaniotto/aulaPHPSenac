<?php

$nome = "Victor";
$sobrenome = "Rodrigues Smaniotto";
$idade = 24;

echo $nome . " " . $sobrenome . ", " , $idade . " anos";
echo "<hr>";


$salario = 10000.50;


echo "Valor decimal não formatado: <br>";
echo $salario;

echo "<hr>";

echo "Valor decimal formatado: <br>";
echo "Utilizando a função number_format() <br>";
echo "R$ " . number_format($salario, 2, ',', '.');

echo "<hr>";

echo "Meu nome é: $nome e o meu sobrenome é : {$sobrenome}";

echo "<hr>";

echo "A caixa d'água está vazia";

echo "<hr>";

echo 'Aula de "PHP"';

?>