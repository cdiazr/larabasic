<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-> Roles
        $admin = Role::create(['name' => 'admin', 'display_name' => 'Administrador']);
        $user = Role::create(['name' => 'user', 'display_name' => 'Usuario']);
        $dev = Role::create(['name' => 'dev', 'display_name' => 'Desarrollador']);

        //-> Permisos
        Permission::create(['name' => 'users index_show'])->syncRoles([$dev, $admin]);
        Permission::create(['name' => 'users create'])->syncRoles([$dev, $admin]);
        Permission::create(['name' => 'users update'])->syncRoles([$dev, $admin]);
        Permission::create(['name' => 'users destroy'])->syncRoles([$dev, $admin]);

        Permission::create(['name' => 'roles index_show'])->syncRoles([$dev, $admin]);
        Permission::create(['name' => 'roles create'])->syncRoles([$dev]);
        Permission::create(['name' => 'roles update'])->syncRoles([$dev]);
        Permission::create(['name' => 'roles destroy'])->syncRoles([$dev]);

        Permission::create(['name' => 'logs index_show'])->syncRoles([$dev, $admin]);

        Permission::create(['name' => 'settings index_show'])->syncRoles([$dev]);
        Permission::create(['name' => 'settings create'])->syncRoles([$dev]);
        Permission::create(['name' => 'settings update'])->syncRoles([$dev]);
        Permission::create(['name' => 'settings destroy'])->syncRoles([$dev]);

        Permission::create(['name' => 'status index_show'])->syncRoles([$dev, $user, $admin]);
        Permission::create(['name' => 'status create'])->syncRoles([$dev, $admin]);
        Permission::create(['name' => 'status update'])->syncRoles([$dev, $admin]);
        Permission::create(['name' => 'status destroy'])->syncRoles([$dev, $admin]);
    }
}
