<?php

declare(strict_types=1);

namespace App\Application\UseCases\ExportRegistration;


final class InputBoundary
{
    private string $cpf

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }
}
