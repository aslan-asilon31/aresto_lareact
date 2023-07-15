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
        Menu::create([
            'category_id' => 1,
            'name' => 'Menu 1',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            'slug' => '-'
        ]);
    
        Menu::create([
            'category_id' => 1,
            'name' => 'Menu 2',
            'image' => 'menu2.jpg',
            'price' => 899,
            'description' => 'Description of Menu 2',
            'slug' => '-'
        ]);
    
        Menu::create([
            'category_id' => 2,
            'name' => 'Menu 3',
            'image' => 'menu3.jpg',
            'price' => 1299,
            'description' => 'Description of Menu 3',
            'slug' => '-'
        ]);
    
        Menu::create([
            'category_id' => 2,
            'name' => 'Menu 4',
            'image' => 'menu4.jpg',
            'price' => 999,
            'description' => 'Description of Menu 4',
            'slug' => '-'
        ]);
    }
}
