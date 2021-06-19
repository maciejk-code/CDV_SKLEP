<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shirts')->insert([
            'id' => 4,
            'type' => 'basic',
            'name' => 'test',
            'size' => 's',
            'brand' => 'nike',
            'color' => 'gold',
            'material' => 'cotton',
            'description' => 'opisopis',
            'prize' => 400,
            'image' => base64_encode(file_get_contents('public/img/adidas.jpg'))
        ]);
    }
}
