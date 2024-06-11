<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create(['name' => 'цвет плафона']);
        Property::create(['name' => 'цвет арматуры']);
        Property::create(['name' => 'бренд']);
    }
}
