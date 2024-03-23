<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Order;

class OrderSeeder extends Seeder
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
                'name' => 'Giovanni Di Giacomo',
                'mail' => 'DiGiacomo@mail.com',
                'address' => 'Via Roma, 73',
                'price' => '54.00',
                'date_delivery' => '2022-12-15 13:30',
                'phone' => '',
            ],
            [
                'name' => 'Giacomo Di Giovanni',
                'mail' => 'DiGiovanni@mail.com',
                'address' => 'Piazza Cavour, 3',
                'price' => '11.00',
                'date_delivery' => '2023-06-15 13:30',
                'phone' => '',
            ],
            [
                'name' => 'Leonardi Licoletti',
                'mail' => 'Licoletti@mail.com',
                'address' => 'Via Bolzano, 23/A',
                'price' => '8.00',
                'date_delivery' => '2020-03-15 13:30',
                'phone' => '',
            ],
            [
                'name' => 'Roberto Brancagrande',
                'mail' => 'Brancagrande@mail.com',
                'address' => 'Via Carducci, 56',
                'price' => '11.00',
                'date_delivery' => '2022-10-15 13:30',
                'phone' => ''
            ],
            [
                'name' => 'Mario Rossi',
                'mail' => 'Rossi@mail.com',
                'address' => 'Corso Magenta, 89',
                'price' => '5.00',
                'date_delivery' => '2022-03-15 13:30',
                'phone' => '3335728739'
            ],
            
        ];

        foreach ($rests as $rest) {
            $new_order = new Order();
            $new_order->fill($rest);
            $new_order->save();


        }
    }
}
