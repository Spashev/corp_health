<?php

declare(strict_types=1);

namespace App\Enum;

enum UserRole: int
{
    case CLIENT = 4;
    case COORDINATOR = 3;
    case CONSULTANT = 2;
    case ADMINISTRATOR = 1;

    public static function values(): array
    {
        return [
            'CLIENT' => self::CLIENT,
            'CONSULTANT' => self::CONSULTANT,
            'COORDINATOR' => self::COORDINATOR,
            'ADMINISTRATOR' => self::ADMINISTRATOR,
        ];
    }
    
    public static function names(): array
    {
        return [
            4 => 'CLIENT',
            3 => 'CONSULTANT',
            2 => 'COORDINATOR',
            1 => 'ADMINISTRATOR',
        ];
    }
}
