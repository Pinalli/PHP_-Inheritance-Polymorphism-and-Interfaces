<?php


namespace Pinalli\Banco\Service;


use Pinalli\Banco\Modelo\Autenticavel;
use Pinalli\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function Login(Autenticavel $autenticavel, string $senha): void
    {
       if( $autenticavel->autenticar($senha)) {
           echo 'Ok. Usuário logado';
       } else {
           echo "Senha errada, tente novamente";
       }
    }
}