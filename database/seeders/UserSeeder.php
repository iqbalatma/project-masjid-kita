<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Statics\Permissions\PermissionPermission;
use App\Statics\Permissions\RolePermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $row = User::create([
            "name" => "iqbal atma muliawan",
            "email" => "iqbalatma@gmail.com",
            "email_verified_at" => now(),
            "password" => "admin"
        ]);

        $role = Role::findById(1);
        $role->givePermissionTo(RolePermission::INDEX);
        $role->givePermissionTo(RolePermission::CREATE);
        $role->givePermissionTo(RolePermission::STORE);
        $role->givePermissionTo(RolePermission::EDIT);
        $role->givePermissionTo(RolePermission::UPDATE);
        $role->givePermissionTo(RolePermission::DESTROY);
        $role->givePermissionTo(PermissionPermission::INDEX);
    }
}
