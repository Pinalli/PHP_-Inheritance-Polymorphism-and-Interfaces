<?php

use Pinalli\Banco\Modelo\Conta\{ContaPoupanca,ContaCorrente, Titular};
use Pinalli\Banco\Modelo\{CPF,Endereco};



require_once 'autoload.php';

$c = new \Pinalli\Banco\Modelo\Conta\ContaPoupanca(
        new Titular(
            new Cpf('987.654.321-23'),
          'Juca bala',
           new Endereco('Porto Alegre', 'Bairro do Zóio', 'Rua das formigas', ' 333')
    )
);

$c->depositar(500);
echo 'Saldo inicial: ', $c->getSaldo() . PHP_EOL;
$c->sacar(150);
echo 'Saldo atual: ',$c->getSaldo();
