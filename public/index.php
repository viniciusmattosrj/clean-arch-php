<?php

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\Email;
use App\Domain\ValueObjects\Cpf;

require_once __DIR__ . '/../vendor/autoload.php';

$registration = new Registration();
$registration->setName('Vinicius Mattos')
    ->setBirthDate(new DateTimeImmutable('1988-01-27'))
    ->setEmail(new Email('vinimattos.rj@gmail.com'))
    ->setRegistrationAt(new DateTimeImmutable())
    ->setRegistrationNumber(new Cpf('01234567890'));

echo '<pre>';
print_r($registration);
