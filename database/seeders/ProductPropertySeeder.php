<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductProperty;
use App\Models\Property;
use Illuminate\Database\Seeder;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = Product::where('name', 'Настольный светильник')->first();
        $product2 = Product::where('name', 'Потолочная люстра')->first();
        $product3 = Product::where('name', 'Торшер')->first();

        $property1 = Property::where('name', 'цвет плафона')->first();
        $property2 = Property::where('name', 'цвет арматуры')->first();
        $property3 = Property::where('name', 'бренд')->first();

        ProductProperty::create([
            'product_id' => $product1->id,
            'property_id' => $property1->id,
            'value' => 'белый',
        ]);

        ProductProperty::create([
            'product_id' => $product1->id,
            'property_id' => $property2->id,
            'value' => 'черный',
        ]);

        ProductProperty::create([
            'product_id' => $product1->id,
            'property_id' => $property3->id,
            'value' => 'Philips',
        ]);

        ProductProperty::create([
            'product_id' => $product2->id,
            'property_id' => $property1->id,
            'value' => 'черный',
        ]);

        ProductProperty::create([
            'product_id' => $product2->id,
            'property_id' => $property2->id,
            'value' => 'золотой',
        ]);

        ProductProperty::create([
            'product_id' => $product2->id,
            'property_id' => $property3->id,
            'value' => 'IKEA',
        ]);

        ProductProperty::create([
            'product_id' => $product3->id,
            'property_id' => $property1->id,
            'value' => 'серебристый',
        ]);

        ProductProperty::create([
            'product_id' => $product3->id,
            'property_id' => $property2->id,
            'value' => 'черный',
        ]);

        ProductProperty::create([
            'product_id' => $product3->id,
            'property_id' => $property3->id,
            'value' => 'Xiaomi',
        ]);
    }
}
