<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'name' => 'Biscotto al cioccolato',
                'description' => 'Delizioso biscotto al cioccolato croccante.',
                'price' => 2.50,
                'image' => 'https://nonnamargherita.it/wp-content/uploads/2020/10/per-sito_10-11-2020_0001_Livello-9-300x300.jpg',
                'in_stock' => true,
                'weight' => 50,
                'product_code' => 'BC001',
            ],
            [
                'name' => 'Pasticcino alla vaniglia',
                'description' => 'Dolce pasticcino alla vaniglia con crema al centro.',
                'price' => 1.80,
                'image' => 'https://nonnamargherita.it/wp-content/uploads/2020/07/archetti-300x300.jpg',
                'in_stock' => true,
                'weight' => 30,
                'product_code' => 'PV002',
            ],
            [
                'name' => 'Biscotto all arancia',
                'description' => 'Biscotto dal gusto fresco di arancia.',
                'price' => 2.20,
                'image' => 'https://nonnamargherita.it/wp-content/uploads/2020/07/tris-archetti-300x300.jpg',
                'in_stock' => false,
                'weight' => 40,
                'product_code' => 'BA003',
            ],
        ];

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->name = $product['name'];
            $newProduct->description = $product['description'];
            $newProduct->price = $product['price'];
            $newProduct->image = $product['image'];
            $newProduct->in_stock = $product['in_stock'];
            $newProduct->weight = $product['weight'];
            $newProduct->product_code = $product['product_code'];
            $newProduct->save();
        };
    }
}