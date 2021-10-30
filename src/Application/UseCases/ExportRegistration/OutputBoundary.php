<?php

declare(strict_types=1);

namespace App\Application\UseCases\ExportRegistration;

final class OutputBoundary
{
    private string $name;
    private string $email;
    private string $birthDate;
    private string $registrationNumber;
    private string $registrataionAt;

    public function __construct(array $values)
    {
        $this->name = $values['name'] ?? '';
        $this->email = $value['email'] ?? '';
        $this->birthDate = $values['birthDate'] ?? '';
        $this->registrationNumber = $values['registrationNumber'] ?? '';
        $this->registrataionAt = $values['registrationNumber'] ?? '';
    }
}
