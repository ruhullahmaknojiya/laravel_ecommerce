<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => "Oppo Mobile",
                'price' => "20000",
                'description' => "A Smartphone with 8gb Ram and much more features.",
                'category' => "mobile",
                'gallery' => "https://5.imimg.com/data5/ON/QH/MY-13191810/oppo-a37f.jpg",
            ],
            [
                'name' => "Samsung Tv",
                'price' => "15000",
                'description' => "A Smart Tv with so Much features.",
                'category' => "Tv",
                'gallery' => "https://i.gadgets360cdn.com/products/televisions/large/1548152950_832_samsung_32-inch-led-full-hd-tv-32eh5330.jpg",
            ],
            [
                'name' => "panasonic Fridge",
                'price' => "15000",
                'description' => "A Fridge with so Much features.",
                'category' => "fridge",
                'gallery' => "https://store.in.panasonic.com/pub/media/catalog/product/cache/40b589206cef99ab7dca1586fe425968/a/r/artboard-1_106.jpg",
            ]
        ]);
    }
}
