<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'username' => 'admin',
            'email' => 'admin@domain.es',
            'password' => Hash::make('password'),
            'verification_code' => bin2hex(random_bytes(32))
        ])->assignRole('admin');

        User::create([
            'name' => 'Usuario',
            'username' => 'user',
            'email' => 'user@domain.es',
            'password' => Hash::make('password'),
            'verification_code' => bin2hex(random_bytes(32))
        ])->assignRole('user');

        User::create([
            'name' => 'Desarrollador',
            'username' => 'dev',
            'email' => 'dev@domain.es',
            'password' => Hash::make('password'),
            'verification_code' => bin2hex(random_bytes(32))
        ])->assignRole('dev');
    }
}
