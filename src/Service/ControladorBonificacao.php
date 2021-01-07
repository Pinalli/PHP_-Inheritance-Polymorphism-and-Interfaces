<?php


namespace Pinalli\Banco\Service;


use Pinalli\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private $totalBonificacao = 0;

    public function addBonificacaoFuncionario(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonus();
    }


    public function getTotalBonificacao(): float
    {
        return $this->totalBonificacao;
    }


}