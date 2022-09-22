<?php

$pessoa = [
    [
        'nome' => 'José Carlos',
        'CPF' => '222.222.333-77',
        'data_nasc' => '20/05/1972',
        'cidade' => 'Marília'
    ],
    [
        'nome' => 'Roseane da Silva',
        'CPF' => '225.365.258-88',
        'data_nasc' => '25/01/1983',
        'cidade' => 'Oriente'
    ],
    [
        'nome' => 'Marcos dos Santos',
        'CPF' => '258.369.147-78',
        'data_nasc' => '03/07/1963',
        'cidade' => 'Marília'
    ]
];

foreach ($pessoa as $item) {
    echo "Nome: ".$item['nome'];
    echo "<br>";
    echo "CPF: ".$item['CPF'];
    echo "<br>";
    echo "Data de Nascimento: ".$item['data_nasc'];
    echo "<br>";
    echo "Cidade: ".$item['cidade'];
    echo "<br>";
    echo "<hr>";
}