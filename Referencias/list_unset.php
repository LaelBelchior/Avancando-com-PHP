<?php

require_once 'funcoes.php';

$contasCorrentes = [
    1 => [
        'titular' => 'Krikor',
        'saldo' => 2554 
    ],
    2 => [
        'titular' => 'Supi',
        'saldo' => 2572
    ],
    3 => [
        'titular' => 'Fier',
        'saldo' => 2560
    ]
];

unset($contasCorrentes[1]);

foreach($contasCorrentes as $colocacao => $conta){
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("O jogador $titular tem $saldo na conta!");
};