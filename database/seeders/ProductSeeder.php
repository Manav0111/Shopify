<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'SAMSUNG Galaxy',
                "price"=>'74000',
                "description"=>"A smartphone with 5gb ram and 256gb storage and many more features",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/714ORHIzWhL.__AC_SY300_SX300_QL70_FMwebp_.jpg",
            ],
            [
                'name'=>'One Plus 11',
                "price"=>'85000',
                "description"=>"A smartphone with 16gb ram and 256gb storage and many more features",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/71jvbxyQ2TL._AC_SL1500_.jpg",
            ],
            [
                'name'=>'Samsung Z-fold',
                "price"=>'125000',
                "description"=>"A smartphone with 5gb ram and 256gb storage and many more features",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/61f3V3m9xnL.__AC_SX300_SY300_QL70_FMwebp_.jpg",
            ],
            [
                'name'=>' Xiaomi Redmi 12 pro ',
                "price"=>'10000',
                "description"=>"A smartphone with 8gb ram and 256gb storage and  many more features",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/612q979anfL.__AC_SX300_SY300_QL70_FMwebp_.jpg",
            ],
            [
                'name'=>'Motorola Edge',
                "price"=>'12000',
                "description"=>"A smartphone with 5gb ram and 256gb storage and many more features",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/712nxo9u15L.__AC_SX300_SY300_QL70_FMwebp_.jpg",
            ],
        ]);
    }
}
