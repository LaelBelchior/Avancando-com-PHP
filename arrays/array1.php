<?php

$conta1 = [
    'titular' => 'Lael',
    'saldo' => 3000
];

$conta2 = [
    'titular' => 'Márcia',
    'saldo' => 5000
];

$conta3 = [
    'titular' => 'Israel',
    'saldo' => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

