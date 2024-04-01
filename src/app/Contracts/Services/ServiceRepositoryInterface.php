<?php

declare(strict_types=1);

namespace App\Contracts\Services;

use App\Contracts\RepositoryInterface;

interface ServiceRepositoryInterface extends RepositoryInterface
{
    public function getServices(string $type);
    
    public function getService(int $id, string $type);
}