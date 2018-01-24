<?php

require 'CartaoDeCredito.php';
require 'Cliente.php';

$cartao = new CartaoDeCredito();
$cliente = new Cliente();

$cartao->numero=111111;
$cartao->dataDeValidade="12/01/2018";

$cliente->codigo=123;
$cliente->nome="Rafael Cosentino";

$cliente->dono=$cartao;

echo "nome $cliente->nome" . PHP_EOL;
echo "codigo $cliente->codigo" .  PHP_EOL;
echo "\nnumero {$cliente->dono->numero}" . PHP_EOL;
echo "dataDeValidade {$cliente->dono->dataDeValidade}" . PHP_EOL;
