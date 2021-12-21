<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            ['id' => 1, 'name' => 'Product1', 'price' => 39],
            ['id' => 2, 'name' => 'Product2', 'price' => 56.25],
            ['id' => 3, 'name' => 'Product3', 'price' => 99.90],
        ];

        foreach ($products as $arr) {
            Product::updateOrCreate($arr);
        }
    }
}
