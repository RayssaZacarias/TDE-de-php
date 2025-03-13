<?php

$input = explode(" ", trim(fgets(STDIN)));
$n = intval($input[0]);
$h = intval($input[1]);


$alturas_minimas = explode(" ", trim(fgets(STDIN)));

$brinquedos_permitidos = 0;
for ($i = 0; $i < $n; $i++) {
    $altura_minima = intval($alturas_minimas[$i]);
    

    if ($h >= $altura_minima) {
        $brinquedos_permitidos++;
    }
}


echo $brinquedos_permitidos . "\n";
?>
