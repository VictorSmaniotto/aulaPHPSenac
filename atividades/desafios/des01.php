<?php

$numeros = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20
];

echo 'Pares: ';
foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        echo "$num, ";
    };
};

echo "<br>";

echo 'Ímpares: ';
foreach ($numeros as $num) {
    if ($num % 2 != 0) {
        echo "$num, ";
    };
};