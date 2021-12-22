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
                'title'=>'Ayam negeri',
                'description'=>'Ayam negeri adalah jenis ras unggulan hasil persilangan dari bangsa-bangsa ayam yang memiliki daya produktivitas tinggi, terutama dalam memproduksi daging ayam.',
                'price'=> 35000,
                'stock'=> 99,
                'image'=>'/Asset/Image/lab_1.jpg',
            ],
            [
                'category'=>'Animal',
                'title'=>'Ayam Kampung',
                'description'=>'Ayam kampung merupakan jenis unggas lokal yang berpotensi sebagai penghasil telur dan daging, sehingga banyak dibudidayakan masyarakat terutama yang bermukim di wilayah pedesaan',
                'price'=> 50000,
                'stock'=> 30,
                'image'=>'/Asset/Image/lab_2.jpeg',
            ],
            [
                'category'=>'Animal',
                'title'=>'Sapi',
                'description'=>'Sapi merupakan hewan ternak terpenting sebagai sumber daging, susu, tenaga kerja, dan kebutuhan lainnya. Sapi menghasilkan sekitar 50% kebutuhan daging di dunia, 95% kebutuhan susu dan 85% kebutuhan kulit Sapi berasal dari famili Bovidae',
                'price'=> 15000000,
                'stock'=> 2,
                'image'=>'/Asset/Image/lab_3.jpg',
            ],
            [
                'category'=>'Animal',
                'title'=>'Bebek',
                'description'=>'Bebek merupakan hewan yang biasa dipelihara atau diternak untuk mendapatkan daging dan telur bebek. Beberapa bebek lokal yang memiliki bulu dengan corak yang indah dipelihara sebagai binatang hias dan pertunjukan.',
                'price'=> 65000,
                'stock'=> 80,
                'image'=>'/Asset/Image/lab_4.jpg',
            ],
            [
                'category'=>'Animal',
                'title'=>'puyuh',
                'description'=>'Puyuh merupakan jenis burung yang tidak suka terbang lama (lebih suka berjalan), ukuran tubuh relatif kecil, dan berkaki pendek. Puyuh mempunyai potensi yang cukup besar sebagai penghasil telur.',
                'price'=> 120000,
                'stock'=> 35,
                'image'=>'/Asset/Image/lab_8_puyuh.jpg',
            ],
            [
                'category'=>'Produk',
                'title'=>'Susu sapi',
                'description'=>'Susu sapi biasanya dikonsumsi secara langsung atau dalam keadaan segar. Kandungan gizi dari susu sapi segar kaya akan kalsium, magnesium, fosfor, vitamin D, vitamin A, dan vitamin B12. Susu sapi juga memiliki kandungan yang tak kalah pentingnya untuk tubuh seperti protein, karbohidrat, lemak, kalori, riboflavin, kolin, zinc, asam linoleat, dan potassium. Karena itulah, susu sapi murni sangat baik untuk dikonsumsi secara rutin agar dapat memenuhi nutrisi harian.',
                'price'=> 20000,
                'stock'=> 99,
                'image'=>'/Asset/Image/lab_5_susu_Sapi.jpeg',
            ],
            [
                'category'=>'Produk',
                'title'=>'Telur ayam',
                'description'=>'Telur adalah salah satu bahan makanan hewani yang dikonsumsi selain daging, ikan dan susu. Umumnya telur yang dikonsumsi berasal dari jenis-jenis burung, seperti ayam, bebek, dan puyuh.',
                'price'=> 18000,
                'stock'=> 999,
                'image'=>'/Asset/Image/lab_6_telur.jpg',
            ],
            [
                'category'=>'Produk',
                'title'=>'Telur bebek',
                'description'=>'Telur adalah salah satu bahan makanan hewani yang dikonsumsi selain daging, ikan dan susu. Umumnya telur yang dikonsumsi berasal dari jenis-jenis burung, seperti ayam, bebek, dan puyuh.',
                'price'=> 22000,
                'stock'=> 999,
                'image'=>'/Asset/Image/lab_7_telur_bebek.jpg',
            ],
            [
                'category'=>'Produk',
                'title'=>'Telur puyuh',
                'description'=>'Telur adalah salah satu bahan makanan hewani yang dikonsumsi selain daging, ikan dan susu. Umumnya telur yang dikonsumsi berasal dari jenis-jenis burung, seperti ayam, bebek, dan puyuh.',
                'price'=> 15000,
                'stock'=> 999,
                'image'=>'/Asset/Image/lab_9_Telur_puyuh.jpg',
            ],
            [
                'category'=>'Animal',
                'title'=>'Lele',
                'description'=>'Lele atau ikan keli, adalah sejenis ikan yang hidup di air tawar. Lele mudah dikenali karena tubuhnya yang licin, agak pipih memanjang, serta memiliki "kumis" yang panjang, yang mencuat dari sekitar bagian mulutnya.',
                'price'=> 10000,
                'stock'=> 399,
                'image'=>'/Asset/Image/lab_10.jpg',
            ],
        ]);
    }
}
