<?php

namespace  Pinalli\Banco\Modelo;
/**
 * Class CPF
 * @package Pinalli\Banco\Modelo
 */
final class CPF  //final = classe não pode ser extendida
{
    private $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->numero = $numero;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
}