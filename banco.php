<?php
/*https://www.php.net/manual/en/language.namespaces.php
https://www.php-fig.org/psr/psr-4/

autoload do PHP, acabamos por implementar a PSR-4.
Ela dá algumas recomendações para escrevermos
autoloaders e você pode conferir em detalhes aqui:
 https://www.php-fig.org/psr/psr-4/.*/

//require_once 'src/Modelo/Conta/Conta.php';
require_once 'autoload.php';

use  Pinalli\Banco\Modelo\Endereco;
use  Pinalli\Banco\Modelo\Conta\Conta;
use  Pinalli\Banco\Modelo\Conta\Titular;
use  Pinalli\Banco\Modelo\CPF;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$alberto = new Titular(new CPF('123.456.789-10'), 'Alberto Pinalli', $endereco);
$c1 = new Conta($alberto,1);
$c1->depositar(500);
$c1->sacar(300); // isso é ok

echo $c1->getNomeTitular() . PHP_EOL;
echo $c1->getCpfTitular() . PHP_EOL;
echo $c1->getSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$c2 = new Conta($patricia,2);
var_dump($c2);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($c2);
echo 'Numero de contas: ', Conta::getNumeroDeContas();
