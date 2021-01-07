<?php
//https://blog.caelum.com.br/como-nao-aprender-orientacao-a-objetos-heranca/
namespace  Pinalli\Banco\Modelo;

/**
 * Class Pessoa
 * @package Pinalli\Banco\Modelo
 */

abstract class Pessoa
{
    use AcessoPrpriedades;

    protected $nome;
    private  $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    final protected function validaNome(string $nomeTitular) //final não é possivel sobescrever
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}