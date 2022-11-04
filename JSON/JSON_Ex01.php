<?php

$pessoa = 
'{
    "nome": "Jason Jones",
    "idade": 38,
    "sexo": "M"
}';

$pessoa_decodificado = json_decode($pessoa, true);
echo $pessoa_decodificado["nome"] . "<br>";
echo $pessoa_decodificado["idade"] . "<br>";
echo $pessoa_decodificado["sexo"] . "<br>";