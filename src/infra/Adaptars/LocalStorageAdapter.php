<?php

declare(strict_types=1);

namespace App\infra\Adapters;

use App\Application\Contracts\Storage;

final class LocalStorage implements Storage
{
    public function store(string $filename, string $path, string $content)
    {
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . $filename, $$content);
    }
}
