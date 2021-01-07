<?php
namespace Pinalli\Banco\Modelo\Conta;

use Pinalli\Banco\Modelo\Autenticavel;
use Pinalli\Banco\Modelo\Pessoa;
use Pinalli\Banco\Modelo\CPF;
use Pinalli\Banco\Modelo\Endereco;


class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }


    public function autenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}