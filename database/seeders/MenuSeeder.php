<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        Menu::create([
            'category_id' => 1,
            'name' => 'Makanan',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            'slug' => '-'
        ]);
    
        //2
        Menu::create([
            'category_id' => 1,
            'name' => 'Beras',
            'image' => 'menu2.jpg',
            'price' => 899,
            'description' => 'Description of Menu 2',
            'slug' => '-'
        ]);
    
        //3
        Menu::create([
            'category_id' => 2,
            'name' => 'Nasi',
            'image' => 'menu3.jpg',
            'price' => 1299,
            'description' => 'Description of Menu 3',
            'slug' => '-'
        ]);
    
        //4
        Menu::create([
            'category_id' => 2,
            'name' => 'Ikan',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    
        //5
        Menu::create([
            'category_id' => 2,
            'name' => 'Daging',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    
        //6
        Menu::create([
            'category_id' => 2,
            'name' => 'Telur',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    
        //7
        Menu::create([
            'category_id' => 2,
            'name' => 'Tahu',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    
        //8
        Menu::create([
            'category_id' => 2,
            'name' => 'Udang',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    
        //9
        Menu::create([
            'category_id' => 2,
            'name' => 'Daging Sapi',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    
        //10
        Menu::create([
            'category_id' => 2,
            'name' => 'Daging ayam',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    }
}
