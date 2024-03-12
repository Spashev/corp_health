<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PasswordGeneratorController extends Controller
{
    public function __invoke(Request $request): string
    {
        return Str::random(12);
    }
}
