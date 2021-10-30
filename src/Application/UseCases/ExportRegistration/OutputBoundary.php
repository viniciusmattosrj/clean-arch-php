<?php

declare(strict_types=1);

namespace App\Application\UseCases\ExportRegistration;

final class OutputBoundary
{
    private string $fullFileName;

    public function __construct(string $fullFileName)
    {
        $this->fullFileName = $fullFileName;
    }
}
