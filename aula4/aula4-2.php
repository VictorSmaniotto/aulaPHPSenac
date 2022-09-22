<?php

echo 'Aula 4 - parte 2';
echo "<hr>";
echo "<br>";
echo 'Array Multidimensional';
echo 'Array dentro de Array';
echo "<hr>";
echo "<br>";

$funcionario = [
    "nome" => "Victor",
    "sobrenome" => "Smaniotto",
    "idade" => 24,
    "cargo" => "Desempregado",
    "salario" => 1000,
    "ativo" => true
];

var_dump($funcionario);

$colaborador = [
    [
        "nome" => "Victor",
        "sobrenome" => "Smaniotto",
        "idade" => 24,
        "cargo" => "Analista",
        "salario" => 1000,
        "ativo" => true,
        "cursos" => 
            [
                'Pedagogia',
                'Web',
                'PHP',
                'JavaScript'
            ]
    ],
    [
        "nome" => "João",
        "sobrenome" => "Pedro",
        "idade" => 45,
        "cargo" => "MEP",
        "salario" => 2000,
        "ativo" => false,
        "cursos" => []
    ],
    [
        "nome" => "Lurdes",
        "sobrenome" => "Maria",
        "idade" => 50,
        "cargo" => "MEP",
        "salario" => 1500,
        "ativo" => true,
        "cursos" => 
        [
            'Photoshop', 'Illustrator'
        ]
    ]
];

var_dump($colaborador);

echo "<hr>";
echo "<br>";
echo 'Imprimindo array com echo, buscando a informação parcial - echo $colaborador[1]["nome"];';
echo "<br>";
echo "Nome: ".$colaborador[1]['nome'];
echo "<br>";
echo "<hr>";
echo "<br>";
echo "Nome: ".$colaborador[2]['nome'];
echo "<br>";
echo "Cargo: ".$colaborador[2]['cargo'];
echo "<br>";
echo "Curso: ".$colaborador[2]['cursos'][0];

echo "<hr>";
echo "<br>";

foreach ($colaborador as $item) {
    echo "Nome: ".$item['nome'];
    echo "<br>";
    echo "Cargo: ".$item['cargo'];
    echo "<br>";
    echo "Idade: ".$item['idade'];
    echo "<br>";
    echo "Cursos: ".implode(", ", $item['cursos']);
    echo "<hr>";
};