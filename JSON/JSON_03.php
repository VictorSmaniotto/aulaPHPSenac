<?php

$pessoa = 
'{
    "nome": "Morty",
    "email": "morty@rick.com",
    "idade": 77
}';

$pessoa_decodificado = json_decode($pessoa, true);
echo $pessoa_decodificado["nome"] . "<br>";
echo $pessoa_decodificado["email"] . "<br>";
echo $pessoa_decodificado["idade"] . "<br>";