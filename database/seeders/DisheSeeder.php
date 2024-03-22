<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Dishe;
use Illuminate\Support\Str;

class DisheSeeder extends Seeder
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
                'name' => 'Carbonara',
                'ingredients' => 'Uova, Guanciale, pasta e pecorino',
                'description' => 'Pasta alla Carbonara',
                'price' => '13.00',
                'visible' => true,
                'image' => 'https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/03/Carbonara-ricetta-5328.jpg',
            ],
            [
                'name' => 'Pizza Quattro Stagioni',
                'ingredients' => 'Carciofi, Funghi, Olive e Prosciutto Cotto',
                'description' => 'È preparata tradizionalmente con pasta per pizza e una base con salsa di pomodori pelati, mozzarella e olio extravergine di oliva; nelle quattro diverse sezioni sono poi sistemati separatamente.',
                'price' => '11.00',
                'visible' => true,
                'image' => 'https://www.petitchef.it/imgupl/recipe/pizza-quattro-stagioni--327908p533338.jpg',
            ],
            [
                'name' => 'Uramaki Salmon',
                'ingredients' => 'Alga Nori, Riso, Salmone, Salsa Terayaky, Philadelphia e Avocado',
                'description' => 'Gli uramaki sono infatti rotolini di riso con all interno una foglia di alga nori arrotolata e il ripieno, mentre sulla parte esterna c è il riso, decorato con semi di sesamo nero o bianco tostati o uova di pesce volante, conosciuto nei ristoranti sushi con il nome di Tobiko.',
                'price' => '8.00',
                'visible' => true,
                'image' => 'https://cdn.cook.stbm.it/thumbnails/ricette/145/145017/hd750x421.jpg',
            ],
            [
                'name' => 'Gran Crispy MacBacon',
                'ingredients' => 'Pancetta, Carne, Cheddar, Pane e Salsa Crispy',
                'description' => 'Panino singolo non compreso Menu',
                'price' => '11.00',
                'visible' => true,
                'image' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/gran-crispy-mcbacon--hero-mob_0.jpg?itok=IxGQroUp',
            ],
            [
                'name' => 'Gyoza',
                'ingredients' => 'Carne, Verdure, Sedano, Cipolle, Sfoglia di Pasta di Riso',
                'description' => '',
                'price' => '5.00',
                'visible' => false,
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/61fd2d235455c3ec4f002f7c/1:1/w_2560%2Cc_limit/Gyoza-alla-piastra.jpg',
            ],
            
        ];

        foreach ($rests as $rest) {
            $new_dishe = new Dishe();
            $new_dishe->name = $rest['name'];
            $new_dishe->ingredients = $rest['ingredients'];
            $new_dishe->description = $rest['description'];
            $new_dishe->price = $rest['price'];
            $new_dishe->visible = $rest['visible'];
            $new_dishe->image = $rest['image'];
            $new_dishe->slug = Str::slug($new_dishe->name, '-');
            $new_dishe->save();
            $new_dishe->slug = Str::slug($new_dishe->name, '-').'-'.$new_dishe->id;
            $new_dishe->save();


        }
    }
}
