<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Buat pengguna superadmin
        $superadmin = User::create([
            'name' => 'admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'no_telephone' => '08123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Berikan role superadmin kepada pengguna tersebut
        $superadmin->assignRole('admin');

        // Buat pengguna biasa
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'no_telephone' => '08123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Berikan role user kepada pengguna tersebut
        $user->assignRole('user');
    }
}
