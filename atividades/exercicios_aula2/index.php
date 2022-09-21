<?php

$nome = 'Victor';
$sobrenome = 'Rodrigues';
$data = '25/09/2022';
$fatura = 338.50;

echo "Olá $nome $sobrenome, não esqueça de pagar sua fatura no dia $data. <br>";
echo "valor da fatura: R$ " . number_format($fatura, 2, ',', '.');
?>