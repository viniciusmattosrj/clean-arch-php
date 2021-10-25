<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects;

use DomainException;

final class Cpf
{
    public function __construct(string $cpf)
    {
        if (!$this->validate($cpf)) {
            throw new DomainException('CPF is not validate');
        }
        $this->$cpf = $cpf;
    }

    public function __toString()
    {
        return $this->cpf;
    }

    private function validate($cpf)
    {
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}
