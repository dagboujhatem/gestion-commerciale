<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$GhaDCe4fkGanffOZz6.riOXp.Xw0hrxifw5qJE5f6c/gwLEDe16yq', 'remember_token' => '',],
            ['id' => 2, 'name' => 'Dagbouj Hatem', 'email' => 'admin@gmail.com', 'password' => '$2y$10$A4gBu4P4s9TOHWjVlOeIPOHc7M3FDKuwRwDqJ6cZDVkADYC8/DDey', 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
