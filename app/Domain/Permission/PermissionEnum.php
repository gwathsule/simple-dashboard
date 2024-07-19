<?php

namespace App\Domain\Permission;

enum PermissionEnum: string
{
    case ACCESS_ADMIN = 'access_admin';
    case USER_READ = 'user_read';
    case USER_CREATE = 'user_create';
    case USER_UPDATE = 'user_update';
    case USER_DELETE = 'user_delete';
    case ROLE_CREATE = 'role_create';
    case ROLE_UPDATE = 'role_update';
    case ROLE_DELETE = 'role_delete';
    case ROLE_READ = 'role_read';
    case PERMISSION_READ = 'permission_read';
    case PERMISSION_CREATE = 'permission_create';
    case PERMISSION_UPDATE = 'permission_update';
    case PERMISSION_DELETE = 'permission_delete';
    case WEB_GUARD = 'web';

    public function label(): string
    {
        return match ($this) {
            static::ACCESS_ADMIN => 'Acessar painel administrador',
            static::USER_READ => 'Recuperar usuários',
            static::USER_CREATE => 'Criar usuários',
            static::USER_UPDATE => 'Atualizar usuários',
            static::USER_DELETE => 'Deletar usuários',
            static::ROLE_CREATE => 'Criar Funções',
            static::ROLE_UPDATE => 'Atualizar Funções',
            static::ROLE_DELETE => 'Deletar Funções',
            static::ROLE_READ => 'Recuperar Funções',
            static::PERMISSION_READ => 'Recuperar Permissões',
            static::PERMISSION_CREATE => 'Criar Permissões',
            static::PERMISSION_UPDATE => 'Atualizar Permissões',
            static::PERMISSION_DELETE => 'Deletar Permissões',
        };
    }

    public static function defaults(): array
    {
        return [
            static::ACCESS_ADMIN,
            static::USER_READ,
            static::USER_CREATE,
            static::USER_UPDATE,
            static::USER_DELETE,
            static::ROLE_CREATE,
            static::ROLE_UPDATE,
            static::ROLE_DELETE,
            static::ROLE_READ,
            static::PERMISSION_READ,
            static::PERMISSION_CREATE,
            static::PERMISSION_UPDATE,
            static::PERMISSION_DELETE,
        ];
    }

}
