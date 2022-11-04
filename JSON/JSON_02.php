<?php

$pessoa = 
'{
    "nome": "Morty",
    "email": "morty@rick.com",
    "idade": 77
}';

$pessoa_decodificado = json_decode($pessoa, false);
echo $pessoa_decodificado->nome;
echo "<br>";
echo $pessoa_decodificado->email;
echo "<br>";
echo $pessoa_decodificado->idade;