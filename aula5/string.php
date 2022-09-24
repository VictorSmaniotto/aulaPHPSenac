<?php

$nome = "Victor Smaniotto";
$cpf = "493.468.500-60";
$data = "20/05/2012";

echo $nome[10];
echo "<hr>";
echo $cpf;
echo "<hr>";
echo str_replace(".", "", substr($cpf, 0, 11));

echo "<hr>";
$dt_array =  array_reverse(explode('/', $data));

var_dump($dt_array);

// var_dump( str_replace("/", "-",array_reverse($dt_array)));

echo $dt_array[0].'-'.$dt_array[1].'-'.$dt_array[2];

