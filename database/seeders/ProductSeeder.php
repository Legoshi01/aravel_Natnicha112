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
        DB::table('products')->insert([
            [
                'product_name' => 'mobile phone',
                'price' => 1500,
                
            ],
            [
                'product_name' => 'router',
                'price' => 1500,
                
            ],    
            [
                'product_name' => 'access point',
                'price' => 1500,
                
            ]
        ]);
    }
}
