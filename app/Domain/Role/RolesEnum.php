<?php

namespace App\Domain\Role;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case USER = 'user';
    case WEB_GUARD = 'web';

    public function label(): string
    {
        return match ($this) {
            static::ADMIN => 'Admin',
            static::MANAGER => 'Gerente',
            static::USER => 'Usuário',
        };
    }

    public static function defaults(): array
    {
        return [
            static::ADMIN,
            static::MANAGER,
            static::USER
        ];
    }
}
