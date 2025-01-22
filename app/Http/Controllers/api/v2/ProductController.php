<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the products with their variants.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all products with their variants
        $products = Product::with('variants')->get();

        // Transform the products
        $transformedProducts = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'image_path' => $product->GetImagePath(),
                'variants' => $product->variants->map(function ($variant) {
                    return [
                        'product_id' => $variant->product_id,
                        'id' => $variant->id,
                        'qty' => $variant->qty,
                        'unit_price' => $variant->unit_price,
                    ];
                }),
            ];
        });

        // Return as JSON response
        return response()->json([
            // 'success' => true,
            'data' => $transformedProducts
        ]);
    }
}