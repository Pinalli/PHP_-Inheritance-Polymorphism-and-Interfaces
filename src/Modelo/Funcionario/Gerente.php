<?php


namespace Pinalli\Banco\Modelo\Funcionario;


use Pinalli\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{

        public function calculaBonus(): float
        {
            return $this->getSalario();
        }

    public function autenticar(string $senha): void
    {
        return === '4321';
    }
}

