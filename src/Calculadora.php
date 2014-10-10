<?php

namespace Vox\Treinamento\Tdd;

use InvalidArgumentException;

class Calculadora
{

    public function somar($a, $b)
    {
        $this->isNumeric($a, $b);
        return ($a + $b);
    }

    public function subitrair($a, $b)
    {
        $this->isNumeric($a, $b);
        return ($a - $b);
    }

    public function multiplicar($a, $b)
    {
        $this->isNumeric($a, $b);
        return ($a * $b);
    }

    public function dividir($a, $b)
    {
        $this->isNumeric($a, $b);
        if ($a <= 0 || $b <= 0) {
            throw new \RuntimeException('Digite um numero maior que zero.');
        }

        return ($a / $b);
    }

    public function isNumeric($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new InvalidArgumentException('É aceito apenas números');
        }
    }

}
