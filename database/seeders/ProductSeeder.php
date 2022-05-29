<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
            [
                'name'=>'Apple MacBook',
                'details'=>'Produced By Apple.Inc',
                'description'=>'Description',
                'brand'=>'Apple',
                'price'=>3200,
                'shipping_cost'=>25,
                'image_path'=>'storage/product.png'
            ],
            [
                'name'=>'Samsung Galaxy Book',
                'details'=>'Produced By Samsung',
                'description'=>'Description',
                'brand'=>'Samsung',
                'price'=>2000,
                'shipping_cost'=>25,
                'image_path'=>'storage/product1.png'
            ],
        ];
        foreach($products as $key =>$value)
        {
            Product::create($value);
        }
    }
}
