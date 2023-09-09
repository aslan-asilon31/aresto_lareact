<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu\MenuChn;


class MenuChnSeeder extends Seeder
{
    public function run(): void
    {
        MenuChn::create([
            'menu_id' => 1,
            'name' => '食物',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);
        
        MenuChn::create([
            'menu_id' => 2,
            'name' => '米',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 3,
            'name' => '熟米饭',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 4,
            'name' => '鱼',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 5,
            'name' => '肉',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 6,
            'name' => '卵',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 7,
            'name' => '豆腐',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 8,
            'name' => '海老',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 9,
            'name' => '牛肉',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);

        MenuChn::create([
            'menu_id' => 10,
            'name' => '鳥肉',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            
        ]);
    }
}
