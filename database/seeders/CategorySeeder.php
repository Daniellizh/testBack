<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lapton = Category::create(['name' => 'MacBook', 'code' => 'laptop']);
        $phone = Category::create(['name' => 'iPhone', 'code' => 'phone']);
    }
}
