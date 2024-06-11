<?php

namespace App\Service;

use App\Http\Requests\Product\ProductFilterRequest;
use App\Models\Product;

class ProductService
{
    public function filterProducts(ProductFilterRequest $request)
    {
        $query = Product::query();

        if ($request->has('properties')) {
            foreach ($request->input('properties') as $property => $values) {
                $query->whereHas('properties', function ($q) use ($property, $values) {
                    $q->where('properties.name', $property)
                        ->whereIn('product_properties.value', $values);
                });
            }
        }

        return $query->paginate(40);
    }
}
