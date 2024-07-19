<?php

namespace Database\Seeders;

use App\Domain\Permission\PermissionEnum;
use App\Domain\Role\RolesEnum;
use Illuminate\Database\Seeder;
use App\Models\Role;

/**
 * PLEASE DON'T ADD THIS SEEDER ON DatabaseSeeder.php
 * CREATE ANOTHER ONE IF NEEDED
 */
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Role::create(['name' => RolesEnum::USER->value, 'guard_name' => RolesEnum::WEB_GUARD->value]);
        $user->givePermissionTo(PermissionEnum::ACCESS_ADMIN);

        $manager = Role::create(['name' => RolesEnum::MANAGER->value, 'guard_name' => RolesEnum::WEB_GUARD->value]);
        $manager->givePermissionTo(
            PermissionEnum::ACCESS_ADMIN,
            PermissionEnum::USER_READ,
            PermissionEnum::USER_CREATE,
            PermissionEnum::USER_UPDATE,
            PermissionEnum::USER_DELETE
        );

        $admin = Role::create(['name' => RolesEnum::ADMIN->value, 'guard_name' => RolesEnum::WEB_GUARD->value]);
        $admin->givePermissionTo(PermissionEnum::ACCESS_ADMIN,
            PermissionEnum::USER_READ,
            PermissionEnum::USER_CREATE,
            PermissionEnum::USER_UPDATE,
            PermissionEnum::USER_DELETE,
            PermissionEnum::ROLE_CREATE,
            PermissionEnum::ROLE_UPDATE,
            PermissionEnum::ROLE_DELETE,
            PermissionEnum::ROLE_READ,
            PermissionEnum::PERMISSION_READ,
            PermissionEnum::PERMISSION_CREATE,
            PermissionEnum::PERMISSION_UPDATE,
            PermissionEnum::PERMISSION_DELETE
        );
    }
}
