<?php

declare(strict_types=1);

/**
 * Calcula o fatorial de um número inteiro.
 *
 * Exemplos:
 * calcularFatorial(5) = 120
 * calcularFatorial(0) = 1
 *
 * @throws InvalidArgumentException se o número for negativo.
 */
function calcularFatorial(int $numero): int
{
    if ($numero < 0) {
        throw new InvalidArgumentException('O número deve ser maior ou igual a zero.');
    }

    $resultado = 1;

    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}
