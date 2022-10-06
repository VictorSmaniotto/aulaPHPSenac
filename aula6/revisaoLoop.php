<?php


$listaClientes = 
[
    'Ana Maria Braga',
    'Ronaldo Fenômeno',
    'Weslley Safadão'
];

$limite = 10;
$tabuada = 5;
$contagem = 0;


echo '<h1> Trabalhando com Estrutura Laço de Repetição</h1>';

echo '<hr>';
echo '<h2>Exemplo de While (enquanto...)</h2>';



while($contagem <= 10)
{
    echo $contagem++ . " ";
}


echo '<hr>';
echo '<h2>Exemplo de Do While (faça...enquanto...)</h2>';


$contagem = 0;

do
{
   echo $contagem++. ' '; 
} while($contagem <= 10);

echo '<hr>';
echo '<h2>Exemplo de For (Para...)</h2>';

for($contagem = 0; $contagem <= 10; $contagem ++)
{
    echo $contagem. ' ';
}


echo '<hr>';
echo '<h2>Exemplo de Foreach </h2>';

//Ambiente de Desenvolvimento
echo var_dump($listaClientes);

//Ambiente de Produção
echo $listaClientes[1];
echo '<br>';

foreach ($listaClientes as $key => $nome) {
    echo "O index/chave é a chave:  $key e o valor é: $nome";

    echo '<br>';
}

echo '<br>';

foreach ($listaClientes as $nome) {
    echo "O valor é: $nome";

    echo '<br>';
}

