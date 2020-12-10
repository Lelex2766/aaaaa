<?php

namespace Database\Seeders;

use App\Models\Products; 
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Products::factory()->count(30)->create();
    }
}

