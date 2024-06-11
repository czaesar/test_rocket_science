<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductFilterRequest;
use App\Http\Resources\Product\ProductResource;
use App\Service\ProductService;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ProductFilterRequest $request)
    {
        $products = $this->productService->filterProducts($request);

        return ProductResource::collection($products);

    }
}
