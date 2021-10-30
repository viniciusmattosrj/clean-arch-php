<?php

declare(strict_types=1);

namespace App\Application\Contracts;

use App\Domain\Entities\Registration;

interface ExporterRegistrationPdfExporter
{
    public function generate(Registration $registration): string;
}
