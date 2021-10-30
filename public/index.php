<?php

use App\Application\UseCases\ExportRegistration\ExportRegistration;
use App\Application\UseCases\ExportRegistration\InputBoundary;
use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\Email;
use App\Domain\ValueObjects\Cpf;

require_once __DIR__ . '/../vendor/autoload.php';

/* Entities */
$registration = new Registration();

$registration->setName('Vinicius Mattos')
    ->setBirthDate(new DateTimeImmutable('1988-01-27'))
    ->setEmail(new Email('vinimattos.rj@gmail.com'))
    ->setRegistrationAt(new DateTimeImmutable())
    ->setRegistrationNumber(new Cpf('01234567890'));

/* UseCases */
$loadRegistrationRepository = new stdClass();
$pdfExporter = new stdClass();
$storage = new stdClass();

$exportRegistrationUseCase = new ExportRegistration($loadRegistrationRepository, $pdfExporter, $storage);
$inputBoundary = new InputBoundary('01234567890', 'xpto', __DIR__ . '/../storage', );
$output = $exportRegistrationUseCase->handle($inputBoundary);
