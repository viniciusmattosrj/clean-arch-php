<?php

declare(strict_types=1);

namespace App\Application\UseCases\ExportRegistration;

use App\Application\Contracts\ExporterRegistrationPdfExporter;
use App\Application\Contracts\Storage;
use App\Domain\Repositories\LoadRegistrationRepository;
use App\Domain\ValueObjects\Cpf;

final class ExportRegistration
{
    private LoadRegistrationRepository $repository;
    private ExporterRegistrationPdfExporter $pdfExporter;
    private Storage $storage;

    public function __construct(
        LoadRegistrationRepository $repository,
        ExporterRegistrationPdfExporter $pdfExporter,
        Storage $storage
    ) {
        $this->repository = $repository;
        $this->pdfExporter = $pdfExporter;
        $this->storage = $storage;
    }

    public function handle(InputBoundary  $input): OutputBoundary
    {
        $cpf = new Cpf($input->getRegistrationNumber());
        $registration = $this->repository->loadByRegistrationNumber($cpf);
        $fileContent = $this->pdfExporter->generate($registration);

        $this->storage->store($input->getPdfFileName(), $input->getPath(), $fileContent); /* Armazena o arquivo */

        return new OutputBoundary($input->getPath() . DIRECTORY_SEPARATOR . $input->getPdfFileName());
    }
}
