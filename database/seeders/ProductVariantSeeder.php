<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductVariant;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        $productVariants = [
            // Full Cream Milk Variants
            [
                'product_id' => $products->where('name', 'Full Cream Milk')->first()->id,
                'qty' => '1L',
                'unit_price' => 60.00 
            ],
            [
                'product_id' => $products->where('name', 'Full Cream Milk')->first()->id,
                'qty' => '500ML',
                'unit_price' => 32.00 
            ],
            [
                'product_id' => $products->where('name', 'Full Cream Milk')->first()->id,
                'qty' => '250ML',
                'unit_price' => 18.00 
            ],
            [
                'product_id' => $products->where('name', 'Full Cream Milk')->first()->id,
                'qty' => '100ML',
                'unit_price' => 10.00 
            ],

            // Standardized Milk Variants
            [
                'product_id' => $products->where('name', 'Standardized Milk')->first()->id,
                'qty' => '1L',
                'unit_price' => 55.00 
            ],
            [
                'product_id' => $products->where('name', 'Standardized Milk')->first()->id,
                'qty' => '500ML',
                'unit_price' => 30.00 
            ],
            [
                'product_id' => $products->where('name', 'Standardized Milk')->first()->id,
                'qty' => '250ML',
                'unit_price' => 17.00 
            ],
            [
                'product_id' => $products->where('name', 'Standardized Milk')->first()->id,
                'qty' => '100ML',
                'unit_price' => 9.00 
            ],

            // Toned Milk Variants
            [
                'product_id' => $products->where('name', 'Toned Milk')->first()->id,
                'qty' => '1L',
                'unit_price' => 50.00 
            ],
            [
                'product_id' => $products->where('name', 'Toned Milk')->first()->id,
                'qty' => '500ML',
                'unit_price' => 28.00 
            ],
            [
                'product_id' => $products->where('name', 'Toned Milk')->first()->id,
                'qty' => '250ML',
                'unit_price' => 15.00 
            ],
            [
                'product_id' => $products->where('name', 'Toned Milk')->first()->id,
                'qty' => '100ML',
                'unit_price' => 8.00 
            ],

            // Double Toned Milk Variants
            [
                'product_id' => $products->where('name', 'Double Toned Milk')->first()->id,
                'qty' => '1L',
                'unit_price' => 48.00 
            ],
            [
                'product_id' => $products->where('name', 'Double Toned Milk')->first()->id,
                'qty' => '500ML',
                'unit_price' => 26.00 
            ],
            [
                'product_id' => $products->where('name', 'Double Toned Milk')->first()->id,
                'qty' => '250ML',
                'unit_price' => 14.00 
            ],
            [
                'product_id' => $products->where('name', 'Double Toned Milk')->first()->id,
                'qty' => '100ML',
                'unit_price' => 7.00 
            ],
        ];

        foreach ($productVariants as $variant) {
            ProductVariant::create($variant);
        }
    }
}
