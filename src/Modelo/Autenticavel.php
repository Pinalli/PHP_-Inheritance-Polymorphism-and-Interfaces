<?php


namespace Pinalli\Banco\Modelo;


interface Autenticavel
{
    public function autenticar(string $senha): bool;
}