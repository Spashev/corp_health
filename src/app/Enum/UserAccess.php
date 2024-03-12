<?php

declare(strict_types=1);

namespace App\Enum;

enum UserAccess: int
{

    case FULL = 1;
    case MOBILE = 2;

    public static function values(): array
    {
        return [
            'FULL' => self::FULL,
            'MOBILE' => self::MOBILE,
        ];
    }

    public static function names(): array
    {
        return [
            1 => 'FULL',
            2 => 'MOBILE',
        ];
    }
}