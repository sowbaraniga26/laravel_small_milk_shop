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

        // Return as JSON response
        return response()->json([
            // 'success' => true,
            'data' => $Products
        ]);
    }
}