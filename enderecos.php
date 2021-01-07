<?php

use Pinalli\Banco\Modelo\Endereco;

require_once 'autoload.php';

$end1 = new Endereco('Ijui','laranjal','Rua da amargura','100');
$end2 = new Endereco('Portela','Centor','Rua Arací','33');

// $end1->cidade = "Nova Cidade";
echo $end1->cidade;

exit();

echo $end1 . PHP_EOL;
echo $end2 . PHP_EOL;