<?php

use Illuminate\Database\Seeder;

class FormationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 't1', 'description' => 'desc name',],

        ];

        foreach ($items as $item) {
            \App\Formation::create($item);
        }
    }
}
