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
            // 'productID' => '00001',
            'productName' => 'Fairy Basic Blouse',
            'description' => 'Kemeja polos, tersedia 2 warna, ready stok, langsung kirim',
            'productPrice' => 100000,
            'image' => 'kosong',
            'type' => 3,
            'productStock' => 2,
        ]);
        
    }
}
