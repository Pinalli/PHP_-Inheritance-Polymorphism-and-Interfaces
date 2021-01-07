<?php

//https://www.php.net/manual/en/language.oop5.traits.php
namespace Pinalli\Banco\Modelo;
/**
 * Trait AcessoPrpriedades
 * @package Pinalli\Banco\Modelo
 */

trait AcessoPrpriedades
{
    public function __get(string $nameAtributo)
    {
        $metodo = 'get' . ucfirst($nameAtributo);
        return $this-> $metodo();
    }

    public function __set($nomeAtributo, $value): void{
        $metodo = 'set' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}