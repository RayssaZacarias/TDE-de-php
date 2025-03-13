<?php

$n = 6;
$h = 120;


$alturas_minimas = [200, 90, 123, 100, 120, 169];

$brinquedos_permitidos = 0;
for ($i = 0; $i < $n; $i++) {

    
    if ($h >= $alturas_minimas[$i]) {
        $brinquedos_permitidos++;
    }
}


echo $brinquedos_permitidos . "\n";

?>
