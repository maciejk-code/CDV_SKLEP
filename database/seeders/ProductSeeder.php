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
        //*********NIKE**********//

        // DB::table('trousers')->insert([
        //     'id' => 1,
        //     'type' => 'shorts',
        //     'name' => 'Optimistic shorts',
        //     'size' => 'M',
        //     'brand' => 'nike',
        //     'color' => 'blue',
        //     'material' => 'cotton',
        //     'description' => 'Daily shorts for daily use',
        //     'prize' => 200,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_bl_tr.jpg'))
        // ]);
        // DB::table('trousers')->insert([
        //     'id' => 2,
        //     'type' => 'shorts',
        //     'name' => 'Not optimistic shorts',
        //     'size' => 'S',
        //     'brand' => 'nike',
        //     'color' => 'blue',
        //     'material' => 'polyester',
        //     'description' => 'Idk what to say',
        //     'prize' => 150,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_bla_tr.jpg'))
        // ]);
        // DB::table('trousers')->insert([
        //     'id' => 3,
        //     'type' => 'trousers',
        //     'name' => 'Optimistic trousers',
        //     'size' => 'M',
        //     'brand' => 'nike',
        //     'color' => 'grey',
        //     'material' => 'cotton',
        //     'description' => 'Daily trousers for daily use',
        //     'prize' => 200,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_gr_tr.jpg'))
        // ]);
        // DB::table('trousers')->insert([
        //     'id' => 4,
        //     'type' => 'shorts',
        //     'name' => 'Otimistic shortsss',
        //     'size' => 'L',
        //     'brand' => 'nike',
        //     'color' => 'yellow',
        //     'material' => 'cotton',
        //     'description' => 'Daily shorts for daily use',
        //     'prize' => 249,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_ye_tr.jpg'))
        // ]);
        // DB::table('trousers')->insert([
        //     'id' => 5,
        //     'type' => 'sport',
        //     'name' => 'Spoooort shortsss',
        //     'size' => 'M',
        //     'brand' => 'nike',
        //     'color' => 'yellow',
        //     'material' => 'polyester',
        //     'description' => 'Sport shorts for Sport use',
        //     'prize' => 249,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_ye_tr2.jpg'))
        // ]);
        // DB::table('shirts')->insert([
        //     'id' => 1,
        //     'type' => 'with_text',
        //     'name' => 'Optimistic tshirt',
        //     'size' => 'S',
        //     'brand' => 'nike',
        //     'color' => 'blue',
        //     'material' => 'cotton',
        //     'description' => 'Daily tshirt for daily use',
        //     'prize' => 150,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_bl_ts.jpg'))
        // ]);
        // DB::table('shirts')->insert([
        //     'id' => 2,
        //     'type' => 'with_picture',
        //     'name' => 'Charming tshirt',
        //     'size' => 'M',
        //     'brand' => 'nike',
        //     'color' => 'black',
        //     'material' => 'cotton',
        //     'description' => 'Cool shirt?',
        //     'prize' => 139,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_bl_ts2.jpg'))
        // ]);
        // DB::table('shirts')->insert([
        //     'id' => 3,
        //     'type' => 'basic',
        //     'name' => 'Very basic tshirt',
        //     'size' => 'M',
        //     'brand' => 'nike',
        //     'color' => 'black',
        //     'material' => 'cotton',
        //     'description' => 'Are u paying 300pln for blank tshirt?',
        //     'prize' => 300,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_bla_ts.jpg'))
        // ]);
        // DB::table('shirts')->insert([
        //     'id' => 4,
        //     'type' => 'with_text',
        //     'name' => 'Optimistic tshirt',
        //     'size' => 'S',
        //     'brand' => 'nike',
        //     'color' => 'green',
        //     'material' => 'cotton',
        //     'description' => 'Is it really green?',
        //     'prize' => 249,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_gr_ts.jpg'))
        // ]);
        // DB::table('shirts')->insert([
        //     'id' => 5,
        //     'type' => 'sport',
        //     'name' => 'POLSKA GUROM',
        //     'size' => 'S',
        //     'brand' => 'nike',
        //     'color' => 'white',
        //     'material' => 'polyester',
        //     'description' => 'Gdzie ta wasza Hiszpania?',
        //     'prize' => 2137,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_pl_ts.jpg'))
        // ]);
        // DB::table('hoodies')->insert([
        //     'id' => 1,
        //     'type' => 'basic',
        //     'name' => 'Optimistic stuff',
        //     'size' => 'L',
        //     'brand' => 'nike',
        //     'color' => 'black',
        //     'material' => 'cotton',
        //     'description' => 'nice nice nice',
        //     'prize' => 300,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_bla_bl.jpg'))
        // ]);
        // DB::table('hoodies')->insert([
        //     'id' => 2,
        //     'type' => 'hoodie',
        //     'name' => 'Optimistic hoodie',
        //     'size' => 'M',
        //     'brand' => 'orange',
        //     'color' => 'black',
        //     'material' => 'cotton',
        //     'description' => '*****',
        //     'prize' => 300,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_or_bl.jpg'))
        // ]);
        // DB::table('sneakers')->insert([
        //     'id' => 1,
        //     'type' => 'low',
        //     'name' => 'Blazerki',
        //     'size' => '40',
        //     'brand' => 'nike',
        //     'color' => 'white',
        //     'material' => 'polyester',
        //     'description' => 'Where is your skating licence?',
        //     'prize' => 279,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_blazer.jpg'))
        // ]);
        // DB::table('sneakers')->insert([
        //     'id' => 2,
        //     'type' => 'sneakers',
        //     'name' => 'Vaporki',
        //     'size' => '41',
        //     'brand' => 'nike',
        //     'color' => 'black',
        //     'material' => 'polyester',
        //     'description' => 'Much air',
        //     'prize' => 799,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_vaporki.jpg'))
        // ]);
        // DB::table('sneakers')->insert([
        //     'id' => 3,
        //     'type' => 'sport',
        //     'name' => 'Football',
        //     'size' => '40',
        //     'brand' => 'nike',
        //     'color' => 'blue',
        //     'material' => 'polyester',
        //     'description' => 'They smell Cristiano Ronaldo',
        //     'prize' => 400,
        //     'image' => base64_encode(file_get_contents('public/photos/nike_sport.jpg'))
        // ]);


        //*********ADIDAS**********//
        
            // DB::table('shirts')->insert([
            //     'id' => 11,
            //     'type' => 'sport',
            //     'name' => 'Bayern *6',
            //     'size' => 'S',
            //     'brand' => 'adidas',
            //     'color' => 'red',
            //     'material' => 'polyester',
            //     'description' => 'Oh, its already 8',
            //     'prize' => 300,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_bayern.jpg'))
            // ]);
            // DB::table('shirts')->insert([
            //     'id' => 12,
            //     'type' => 'basic',
            //     'name' => 'Basic tshirt',
            //     'size' => 'M',
            //     'brand' => 'adidas',
            //     'color' => 'black',
            //     'material' => 'cotton',
            //     'description' => 'Flower',
            //     'prize' => 150,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_bl_ts.jpg'))
            // ]);
            // DB::table('shirts')->insert([
            //     'id' => 13,
            //     'type' => 'sport',
            //     'name' => 'Germany NT',
            //     'size' => 'S',
            //     'brand' => 'adidas',
            //     'color' => 'white',
            //     'material' => 'polyester',
            //     'description' => '8.0 for the win',
            //     'prize' => 300,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_niemcy.jpg'))
            // ]);
            // DB::table('shirts')->insert([
            //     'id' => 14,
            //     'type' => 'with_picture',
            //     'name' => 'Basic Tshirt',
            //     'size' => 'L',
            //     'brand' => 'adidas',
            //     'color' => 'orange',
            //     'material' => 'cotton',
            //     'description' => 'Summer Vibes',
            //     'prize' => 200,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_or_ts.jpg'))
            // ]);
            // DB::table('hoodies')->insert([
            //     'id' => 11,
            //     'type' => 'hoodie',
            //     'name' => 'Optimistic stuff',
            //     'size' => 'L',
            //     'brand' => 'adidas',
            //     'color' => 'blue',
            //     'material' => 'cotton',
            //     'description' => 'well well well',
            //     'prize' => 300,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_bl_bl.jpg'))
            // ]);
            // DB::table('hoodies')->insert([
            //     'id' => 12,
            //     'type' => 'hoodie',
            //     'name' => 'Optimistic stuff',
            //     'size' => 'M',
            //     'brand' => 'adidas',
            //     'color' => 'black',
            //     'material' => 'cotton',
            //     'description' => 'well well well',
            //     'prize' => 300,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_bla_bl.jpg'))
            // ]);
            // DB::table('hoodies')->insert([
            //     'id' => 13,
            //     'type' => 'basic',
            //     'name' => 'Optimistic stuff',
            //     'size' => 'L',
            //     'brand' => 'adidas',
            //     'color' => 'red',
            //     'material' => 'cotton',
            //     'description' => 'Three Stripes',
            //     'prize' => 250,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_re_bl.jpg'))
            // ]);
            // DB::table('trousers')->insert([
            //     'id' => 11,
            //     'type' => 'trousers',
            //     'name' => 'Optimistic trousers',
            //     'size' => 'M',
            //     'brand' => 'adidas',
            //     'color' => 'green',
            //     'material' => 'cotton',
            //     'description' => 'Daily trousers for daily use',
            //     'prize' => 269,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_gr_tr.jpg'))
            // ]);
            // DB::table('trousers')->insert([
            //     'id' => 12,
            //     'type' => 'shorts',
            //     'name' => 'Optimistic shorts',
            //     'size' => 'L',
            //     'brand' => 'adidas',
            //     'color' => 'green',
            //     'material' => 'polyester',
            //     'description' => 'ye cool watter',
            //     'prize' => 100,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_gr2_tr.jpg'))
            // ]);
            // DB::table('sneakers')->insert([
            //     'id' => 11,
            //     'type' => 'sport',
            //     'name' => 'Run',
            //     'size' => '39',
            //     'brand' => 'adidas',
            //     'color' => 'black',
            //     'material' => 'polyester',
            //     'description' => 'fast',
            //     'prize' => 250,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_nmd.jpg'))
            // ]);
            // DB::table('sneakers')->insert([
            //     'id' => 12,
            //     'type' => 'sneakers',
            //     'name' => 'Ozweego',
            //     'size' => '41',
            //     'brand' => 'adidas',
            //     'color' => 'black',
            //     'material' => 'polyester',
            //     'description' => 'Young 2.0',
            //     'prize' => 300,
            //     'image' => base64_encode(file_get_contents('public/photos/adi_ozywego.jpg'))
            // ]);
            
    }
}
