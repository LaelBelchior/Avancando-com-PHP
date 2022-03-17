<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorParaDeposito): array
{
    if($valorParaDeposito <= 0){
        exibeMensagem('Você deve depositar um valor maior que zero.');
    } else {
        $conta['saldo'] += $valorParaDeposito;
    }

    return $conta;
}

function sacar(array $conta, float  $valorParaSaque): array
{
    if($valorParaSaque < $conta['saldo']){
        exibeMensagem('Você não pode sacar um valor maior do que o seu saldo.');
    } else {
        $conta['saldo'] -= $valorParaSaque;
    }

    return $conta;
}