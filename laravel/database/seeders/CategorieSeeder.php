<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [[
            'name' => 'personality'
        ],
        [
            'name' => 'job'
        ],
    ];
        DB::table('categories')->insert($categories);
    }
}
