<?php

$contasCorrentes = [
    '123' => [
        'titular' => 'Yago',
        'saldo' => 5000
    ],
    '234' => [
        'titular' => 'Gabriela',
        'saldo' => 4000
    ],
    '345' => [
        'titular' => 'Ramon',
        'saldo' => 3000
    ]
];

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorParaDeposito): array
{
    if($valorParaDeposito > 0){
        $conta['saldo'] += $valorParaDeposito;
    } else {
        exibeMensagem('Valor para depósito deve ser maior que zero!');
    }

    return $conta;
}

function sacar(array $conta, float $valorParaSaque): array
{
    if($valorParaSaque > $conta['saldo']){
        exibeMensagem('Você não tem saldo suficiente para realizar essa transação!');
    } else {
        $conta['saldo'] -= $valorParaSaque;
    }

    return $conta;
}

$contasCorrentes['123'] = sacar($contasCorrentes['123'], 1500);
$contasCorrentes['234'] = sacar($contasCorrentes['234'], 1500);
$contasCorrentes['345'] = depositar($contasCorrentes['345'], 10);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem('O cpf ' . $cpf . ' do titular ' . $conta['titular'] . ' tem ' . $conta['saldo']. ' de saldo!');
}