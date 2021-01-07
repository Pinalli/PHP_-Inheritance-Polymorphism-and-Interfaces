<?php

use Pinalli\Banco\Modelo\CPF;
use Pinalli\Banco\Modelo\Funcionario\Diretor;
use Pinalli\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticar = new Autenticador();
$diretor =  new Diretor(
    'João das Cuias',
    new CPF('678.123.000-77'),
    10000
);

$autenticar->Login($diretor, '1234');

/*
 * $titular =  new Titular(
    new CPF('678.123.000-77'),
    'João das Cuias',
    new \Pinalli\Banco\Modelo\Endereco("",'','','')
);
$autenticar->Login($titual, '1234');
 */
