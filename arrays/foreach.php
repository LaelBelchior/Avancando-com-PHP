<?php

$contasCorrentes = [
    '123456' => [
        'titular' => 'Gabrielle',
        'saldo' => 5000
    ],
    '234567' => [
        'titular' => 'Yuri',
        'saldo' => 4000
    ],
    '345678' => [
        'titular' => 'Aquino',
        'saldo' => 3000
    ]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . ' = ' . $conta['titular']. ' tem saldo de ' . $conta['saldo'] . PHP_EOL;
};