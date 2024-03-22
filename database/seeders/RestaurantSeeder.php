<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Restaurant;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rests = [
            [
                'business_name' => 'Mc Donald',
                'address' => 'Piazza San Domenico 4',
                'vat_number' => 'IT98746784967',
                'logo' => 'https://centrolecupole.com/wp-content/uploads/2021/02/BAR_CUPOLE5.png',
            ],
            [
                'business_name' => 'Pizzeria da Gino Paoli',
                'address' => 'Via San Quirico 72',
                'vat_number' => 'IT94783484990',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEMF73iboJ_swOO9cEnjqV7HtcqMjUNT7mKUPKpGBu_A&s',
            ],
            [
                'business_name' => 'Sushi',
                'address' => 'Via delle Gioie 61',
                'vat_number' => 'IT98734787294',
                'logo' => 'https://img.freepik.com/premium-vector/japanese-sushi-restaurant-logo-design-inspiration_500223-504.jpg',
            ],
        ];

        foreach ($rests as $rest) {
            $new_rest = new Restaurant();
            $new_rest->business_name = $rest['business_name'];
            $new_rest->address = $rest['address'];
            $new_rest->vat_number = $rest['vat_number'];
            $new_rest->slug = Str::slug($new_rest->business_name, '-');
            $new_rest->logo = $rest['logo'];
            $new_rest->save();
            $new_rest->slug = Str::slug($new_rest->business_name, '-').'-'.$new_rest->id;
            $new_rest->save();


        }
        
    }
}
