<?php

declare(strict_types=1);

namespace App\Application\UseCases\ExportRegistration;

use App\Domain\Repositories\LoadRegistrationRepository;
use App\Domain\ValueObjects\Cpf;

final class ExportRegistration
{
    private LoadRegistrationRepository $repository;
    public function __construct(LoadRegistrationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(InputBoundary  $input): OutputBoundary
    {
        $cpf = new Cpf($input->getRegistrationNumber());
        $registration = $this->repository->loadByRegistrationNumber();

        return new OutputBoundary([
            'name' => $registration->getName(),
            'email' => (string)$registration->getEmail(),
            'birthDate' => $registration->getBirthDate()->format(DateTime::ATOM),
            'registrationNumber' => (string)$registration->getRegistrationNumber(),
            'registrationAt' => $registration->getRegistrationAt()->format(DateTime::ATOM)
        ]);
    }
}
