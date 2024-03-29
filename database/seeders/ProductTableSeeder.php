<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    //    $products=[
    //         [
    //             'name' => 'Book',
    //             'price' => 100,
    //             'description' => 'haha',
    //         ],
    //         [
    //             'name' => 'Pen',
    //             'price' => 100,
    //             'description' => 'haha'
    //         ],
    //         [
    //             'name' => 'Book',
    //             'price' => 333,
    //             'description' => 'haha',
    //         ],
    //         [
    //             'name' => 'Water',
    //             'price' => 44,
    //             'description' => 'haha',
    //         ],
    //         [
    //             'name' => 'TV',
    //             'price' => 5555,
    //             'description' => 'haha',
    //         ],
    //     ];
    //     foreach ($products as $product) {
    //         Product::create($product);}

    Product::factory(10)->create();
    }
}
