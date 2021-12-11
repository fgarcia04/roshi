<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'Dashboard',
            'icon' => 'dashboard',
            'slug' => 'admin.home',
            'order' => 0,
        ]);
        Menu::create([
            'name' => 'Usuarios',
            'icon' => 'user',
            'slug' => 'admin.users',
            'order' => 0,
        ]);
    }
}
