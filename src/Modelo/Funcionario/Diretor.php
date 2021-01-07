<?php


namespace Pinalli\Banco\Modelo\Funcionario;

use Pinalli\Banco\Modelo\Autenticavel;

/**
 * Class Diretor
 * @package Pinalli\Banco\Modelo\Funcionario
 */

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonus(): float
    {
        return $this->getSalario() * 2;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
