<?php
/*
 * Polimorfismo
 * https://www.caelum.com.br/apostila-java-orientacao-objetos/heranca-reescrita-e-polimorfismo#invocando-o-metodo-reescrito
 */
require_once 'autoload.php';

use Pinalli\Banco\Service\ControladorBonificacao;
use Pinalli\Banco\Modelo\{CPF};
use Pinalli\Banco\Modelo\Funcionario\{Gerente, Diretor, Dev, EditorVideo};


$fun1 = new Dev(
    'Juca Batista',
    new CPF('987.123.654-12'),
    1000
);

$fun2 = new Gerente(
    'Gabriel Medina',
    new CPF('456.187.321-90'),
    3000
);

$fun3 = new Diretor(
    'Cardoso Lima',
    new CPF('678.123.987-54'),
    5000
);

$editor = new EditorVideo(
    'Paulo',
    new CPF('890.456.321-12'),
    1345
);

$fun1 ->sobeNivel();
$c = new ControladorBonificacao();

$c->addBonificacaoFuncionario($fun2);
$c->addBonificacaoFuncionario($fun3);
$c->addBonificacaoFuncionario($editor);
echo $c->getTotalBonificacao() . PHP_EOL ;
//var_dump($fun1) . PHP_EOL;
//var_dump($fun2) . PHP_EOL;
echo 'Salario Dev ', $fun1->getSalario(). PHP_EOL ;
echo 'Salario Editor ', $editor->getSalario();
