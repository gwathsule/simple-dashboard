<?php

namespace Database\Seeders;

use App\Domain\Role\RolesEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * PLEASE DON'T ADD THIS SEEDER ON DatabaseSeeder.php
 * CREATE ANOTHER ONE IF NEEDED
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var User $admin */
        $admin = User::query()->create([
            'name' => 'Admin',
            'email' => env('ADMIN_INITIAL_EMAIL', 'admin@mail.com'),
            'password' => Hash::make(env('ADMIN_INITIAL_PASSWORD', '123456')),
        ]);

        $admin->assignRole(RolesEnum::ADMIN);
    }
}
