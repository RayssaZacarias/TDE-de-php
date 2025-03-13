<?php

$c = intval(trim(fgets(STDIN)));
$a = intval(trim(fgets(STDIN)));


$alunos_por_viagem = $c - 1;


$viagens = intval($a / $alunos_por_viagem);


if ($a % $alunos_por_viagem != 0) {
    $viagens++;
}

echo $viagens . "\n";
?>
