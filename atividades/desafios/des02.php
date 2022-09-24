<?php

$cpf = '493.468.500-60';

$cpf = preg_replace('/[^0-9]/', '', $cpf);

echo $cpf;