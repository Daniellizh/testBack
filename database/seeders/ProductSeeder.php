<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for($count=0;$count<10;$count++){
            DB::table('products')->insert([
                'category_id' => Category::inRandomOrder()->take(1)->first()->id,
                'name' => Str::random(10),
                'code' => Str::random(10),
                'description'  => Str::random(100),
                'price'  => rand(100, 2500),
                'updated_at' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"),
                
            ]);
        }
    }
}
