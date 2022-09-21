<?php
// Array Unidimensional
$listaCompra = ['Arroz', 'Feijão', 'Batata', 'Macarrão', 'Farofa'];
echo "Array Unidimensional";
echo "<br>";
echo "<hr>";
echo "Array impresso com print_r";

echo "<pre>";
print_r($listaCompra);
echo "</pre>";


echo "<hr>";

echo "Array impresso com var_dump";
var_dump($listaCompra);

echo "<hr>";
echo 'Concatenação dos itens do Array $listaCompra[0].", ".$listaCompra[1]';
echo "<br>";
echo $listaCompra[0].', '.$listaCompra[1].', '.$listaCompra[2].' e '.$listaCompra[3];

echo "<hr>";

echo 'Array impresso utilizando a função foreach, com elementos HTML (ul, li)';
echo "<br>";
foreach ($listaCompra as $item) {
    echo "<ul><li>$item</li></ul>";
}

echo "<hr>";
echo "<br>";

// Array Associativo
echo "Array Associativo";
echo "<br>";
echo "<hr>";
$funcionario = [
    "nome" => "Victor",
    "sobrenome" => "Smaniotto",
    "idade" => 24,
    "cargo" => "Desempregado",
    "salario" => 1000,
    "ativo" => true
];


var_dump($funcionario);

echo $funcionario["cargo"];

echo "<hr>";
