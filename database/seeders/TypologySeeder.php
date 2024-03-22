<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Typology;

class TypologySeeder extends Seeder
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
                'name' => 'Panini',
                'type_image' => 'https://www.sandanielemagazine.com/wp-content/uploads/2021/01/panino-gourmet-con-carciofi-fritti-e-Prosciutto-di-San-Daniele.jpg',
            ],
            [
                'name' => 'Kebab',
                'type_image' => 'https://media.istockphoto.com/id/851493796/it/foto/primo-passo-di-kebab-sandwich.jpg?s=612x612&w=0&k=20&c=A7Kj4tD9T7UEQnzwB72PX2i2IcgUqLw62A0swrmUlVc=',
            ],
            [
                'name' => 'Sushi',
                'type_image' => 'https://img.freepik.com/premium-photo/sushi-withe-background-ai-generative_514344-4128.jpg',
            ],
            [
                'name' => 'Cinese',
                'type_image' => 'https://media.istockphoto.com/id/1292747109/photo/fried-wonton-plates.jpg?s=612x612&w=0&k=20&c=r5DmYgtYR3ks3xISIDjYdEMZ89kv9cHH0kz9LI2S_3o=',
            ],
            [
                'name' => 'Pizza',
                'type_image' => 'https://img.freepik.com/premium-photo/pizza-margherita-with-tomatoes-basil-mozzarella-cheese-isolated-white-background_87414-5001.jpg',
            ],
            [
                'name' => 'Piadine',
                'type_image' => 'https://t4.ftcdn.net/jpg/00/36/10/19/360_F_36101927_PiATzeSryReMtziiFNIRekmHZk79Xiln.jpg',
            ],
            [
                'name' => 'Indiano',
                'type_image' => 'https://img.freepik.com/premium-photo/bowl-chicken-curry-with-rice-white-background_787273-4129.jpg',
            ],
            [
                'name' => 'Messicano',
                'type_image' => 'https://img.freepik.com/premium-photo/two-tacos-with-white-background_871710-1629.jpg',
            ],
            [
                'name' => 'FastFood',
                'type_image' => 'https://img.freepik.com/premium-photo/burger-white-background_398492-13237.jpg',
            ],
            [
                'name' => 'Ristorante',
                'type_image' => 'https://img.freepik.com/premium-photo/restaurant-food-white-background-restaurant-menu-photos-menu_830198-529.jpg',
            ],
            [
                'name' => 'SteakHouse',
                'type_image' => 'https://img.freepik.com/premium-photo/grilled-porterhouse-steak-chopping-board-cooked-beef-meat-isolated-white-background_89816-45857.jpg',
            ],
            [
                'name' => 'Pesce',
                'type_image' => 'https://img.freepik.com/premium-photo/cooked-fish-plate-white-background_252187-3120.jpg',
            ],
            [
                'name' => 'Dessert',
                'type_image' => 'https://img.freepik.com/premium-photo/sweet-tiramisu-isolated-white-background-tasty-dessert_185193-4072.jpg',
            ],
            
        ];

        foreach ($rests as $rest) {
            $new_type = new Typology();
            $new_type->name = $rest['name'];
            $new_type->type_image = $rest['type_image'];
            $new_type->save();

        }
    }
}
