<?php
//https://blog.caelum.com.br/como-nao-aprender-orientacao-a-objetos-o-excesso-de-ifs/
namespace Pinalli\Banco\Modelo\Conta;

class ContaPoupanca extends  Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}