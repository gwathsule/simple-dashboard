<?php

namespace Database\Seeders;

use App\Domain\Permission\PermissionEnum;
use App\Models\Permission;
use Illuminate\Database\Seeder;

/**
 * PLEASE DON'T ADD THIS SEEDER ON DatabaseSeeder.php
 * CREATE ANOTHER ONE IF NEEDED
 */
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => PermissionEnum::ACCESS_ADMIN->value, 'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::USER_READ->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::USER_CREATE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::USER_UPDATE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::USER_DELETE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::ROLE_CREATE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::ROLE_UPDATE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::ROLE_DELETE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::ROLE_READ->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::PERMISSION_READ->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::PERMISSION_CREATE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::PERMISSION_UPDATE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
        Permission::create(['name' => PermissionEnum::PERMISSION_DELETE->value,  'guard_name' => PermissionEnum::WEB_GUARD]);
    }
}
