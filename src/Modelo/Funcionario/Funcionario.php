<?php

namespace  Pinalli\Banco\Modelo\Funcionario;

use Pinalli\Banco\Modelo\CPF;
use Pinalli\Banco\Modelo\Pessoa;

require_once 'src/Modelo/CPF.php';

 abstract class Funcionario extends Pessoa
{

    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function aumentaSalario(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo 'O valor deve ser positivo';
            return;

        } else {
            $this->salario += $valorAumento;
        }
    }

   abstract public function calculaBonus(): float;

}