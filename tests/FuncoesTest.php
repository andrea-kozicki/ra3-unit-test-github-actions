<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FuncoesTest extends TestCase
{
    public function testCalculaFatorialDeCincoComSucesso(): void
    {
        $this->assertSame(120, calcularFatorial(5));
    }

    public function testCalculaFatorialDeZeroComSucesso(): void
    {
        $this->assertSame(1, calcularFatorial(0));
    }

    public function testNumeroNegativoLancaExcecao(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('O número deve ser maior ou igual a zero.');

        calcularFatorial(-1);
    }
}
