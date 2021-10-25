<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use DateTimeInterface;

final class Registration
{
    private string $name;
    private string $email;
    private DateTimeInterface $birthDate;
    private string $registrationNumber;
    private DateTimeInterface $registrataionAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->name;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirthDate(): DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * @param DateTimeInterface
     */
    public function setBirthDate(DateTimeInterface $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber(string $registrationNumber): void
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @return DateTimeInterface
     */
    public function getRegistrationAt(): DateTimeInterface
    {
        return $this->registrataionAt;
    }

    /**
     * @param DateTimeInterface
     */
    public function setRegistrationAt(DateTimeInterface $registrataionAt): void
    {
        $this->registrataionAt = $registrataionAt;
    }
}
