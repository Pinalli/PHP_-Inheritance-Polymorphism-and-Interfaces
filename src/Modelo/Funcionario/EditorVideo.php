<?php


namespace Pinalli\Banco\Modelo\Funcionario;

/**
 * Class EditorVideo
 * @package Pinalli\Banco\Modelo\Funcionario
 */

class EditorVideo extends Funcionario
{

    public function calculaBonus(): float
    {
       return 600;
    }

}