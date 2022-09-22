<?php

$pessoa = [
    1 => [
        'nome' => 'João Batista',
        'cargo' => 'Professor',
        'competencias' =>
        [
            'informatica' =>
            [
                'word',
                'excel'
            ],

            'formacao' =>
            [
                'Analista de Sistema',
                'Pós em Desenvolvimento de Software'
            ]
        ]
    ],
    2 =>[
        'nome' => 'Maria dos Santos',
        'cargo' => 'Enfermeira',
        'competencias' =>
        [
            'informatica' =>
            [
                'word',
                'excel',
                'power point',
                'internet'
            ],

            'formacao' =>
            [
                'Enfermeira' => 'Especialista Centro Cirurgico'
            ],
            'Pós em Urgencia'
        ]
    ]
];


var_dump($pessoa);

echo $pessoa[1]['competencias']['formacao'][1];
echo "<br>";
echo $pessoa[2]['competencias'][0];
echo "<br>";
echo $pessoa[2]['competencias']['formacao']['Enfermeira'];