<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

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
        //
        DB::table('products')->insert([
            'name' => 'Asymetrical Crop Top',
            'slug' => 'asymetrical-crop-top',
            'price' => 190000,
            'image_1' => 'img-1.jpg',
            'image_2' => 'img-2.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Slim Liar Blazer',
            'slug' => 'slim-liar-blazer',
            'price' => 365000,
            'image_1' => 'img-3.jpg',
            'image_2' => 'img-4.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Balloon Sleeve Shirt',
            'slug' => 'balloon-sleeve-shirt',
            'price' => 215000,
            'image_1' => 'img-5.jpg',
            'image_2' => 'img-6.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Blue Long Shirt',
            'slug' => 'blue-long-shirt',
            'price' => 486000,
            'image_1' => 'img-7.jpg',
            'image_2' => 'img-8.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Marnia Long Sleeves',
            'slug' => 'marnia-long-sleeves',
            'price' => 318000,
            'image_1' => 'ne1.jpg',
            'image_2' => 'ne2.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Classic Oxford Shirt',
            'slug' => 'classic-oxford-shirt',
            'price' => 256000,
            'image_1' => 'ne3.jpg',
            'image_2' => 'ne4.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Vicky Jeans Jacket',
            'slug' => 'vicky-jeans-jacket',
            'price' => 194000,
            'image_1' => 'ne5.jpg',
            'image_2' => 'ne6.jpg',
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Short Sleeves Jumper',
            'slug' => 'short-sleeves-jumper',
            'price' => 234000,
            'image_1' => 'ne7.jpg',
            'image_2' => 'ne8.jpg',
            'created_at' => now()
        ]);
    }
}
