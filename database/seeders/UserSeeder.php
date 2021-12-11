<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'email' => 'admin@roshi.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'user_verified_at' => Carbon::now()
        ]);

        User::create([
            'name' => 'Federico Garcia',
            'email' => 'federico04garcia@gmail.com',
            'role' => 'customer',
            'password' => Hash::make('password'),
            'user_verified_at' => Carbon::now()
        ]);
    }
}
