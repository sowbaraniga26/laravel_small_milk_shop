<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Full Cream Milk',
                'description' => 'Rich and creamy milk, perfect for making desserts and adding extra flavor to tea or coffee.',
            ],
            [
                'name' => 'Standardized Milk',
                'description' => 'Milk with a consistent fat content, ideal for everyday use in cooking and beverages.',
            ],
            [
                'name' => 'Toned Milk',
                'description' => 'Low-fat milk with balanced nutrition, suitable for health-conscious individuals.',
            ],
            [
                'name' => 'Double Toned Milk',
                'description' => 'Ultra low-fat milk, an excellent choice for those on a calorie-controlled diet.',
            ],
        ];

        foreach ($products as $row)
        {            
            Product::create($row);
        }  
    }
}
