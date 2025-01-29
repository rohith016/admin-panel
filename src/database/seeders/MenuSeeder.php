<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            ['name' => 'Dashboard', 'route_name' => 'dashboard', 'url' => '/dashboard', 'icon' => 'bi bi-speedometer2', 'parent_id' => null, 'order' => 1],
            // ['name' => 'Users', 'route_name' => 'users.index', 'url' => '/users', 'icon' => 'bi bi-people', 'parent_id' => null, 'order' => 2],
            // ['name' => 'All Users','route_name' => 'users.index', 'url' => '/users', 'icon' => 'bi bi-circle', 'parent_id' => 2, 'order' => 1],
            // ['name' => 'Settings', 'route_name' => 'settings.index', 'url' => '/settings', 'icon' => 'bi bi-gear', 'parent_id' => null, 'order' => 3],
        ]);
    }
}
