<?php


namespace Pinalli\Banco\Modelo\Funcionario;
/**
 * Class Dev
 * @package Pinalli\Banco\Modelo\Funcionario
 */

class Dev extends  Funcionario
{

    public function sobeNivel()
    {
        $this->aumentaSalario($this->getSalario() * 0.75);
    }


     public function calculaBonus(): float
      {
          return 500.0;
      }

}