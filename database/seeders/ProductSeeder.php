<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category'=>'Animal',
                'title'=>'Ayam Kampus',
                'description'=>'Ini adalah ayam kampus yang biasa dipakai mahasiswa dengan spec yang mantap dari bemper depan sampai lubang buaya bersih',
                'price'=> 100000,
                'stock'=> 99,
                'image'=>'/Asset/Image/lab_1.jpg',
            ],
            [
                'category'=>'Animal',
                'title'=>'Ayam Jago',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit corrupti fugiat dolores nostrum, magnam alias, cum optio quaerat, eos itaque ab veniam quis repudiandae obcaecati explicabo. A provident voluptatum voluptatibus.
                ',
                'price'=> 200000,
                'stock'=> 99,
                'image'=>'/Asset/Image/lab_2.jpeg',
            ],
            [
                'category'=>'Animal',
                'title'=>'Sepi',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit corrupti fugiat dolores nostrum, magnam alias, cum optio quaerat, eos itaque ab veniam quis repudiandae obcaecati explicabo. A provident voluptatum voluptatibus.
                ',
                'price'=> 300000,
                'stock'=> 99,
                'image'=>'/Asset/Image/lab_3.jpg',
            ],
        ]);
    }
}
