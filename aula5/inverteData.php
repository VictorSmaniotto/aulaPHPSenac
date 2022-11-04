<?php

function inverte_data($data){
    $dt_array = array_reverse(explode('/', $data));
    return $dt_array[0].'-'.$dt_array[1].'-'.$dt_array[2];

};

echo "Função Inverter Data <br>";
echo inverte_data("23/09/2022");
echo "<br>";
echo "<hr>";

?>