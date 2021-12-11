<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\SubMenu;
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
            'order' => 1,
        ]);
        Menu::create([
            'name' => 'Clientes',
            'icon' => 'customers',
            'slug' => 'admin.customers',
            'order' => 2,
        ]);
    }
}
