<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'name' => 'Настольный светильник',
            'price' => 1500,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Потолочная люстра',
            'price' => 3000,
            'quantity' => 5,
        ]);

        Product::create([
            'name' => 'Торшер',
            'price' => 2500,
            'quantity' => 7,
        ]);
    }
}
