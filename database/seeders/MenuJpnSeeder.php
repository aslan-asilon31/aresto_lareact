<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu\Menu;

class MenuJpnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'category_id' => 1,
            'name' => 'Telur',
            'image' => 'menu1.jpg',
            'price' => 1099,
            'description' => 'Description of Menu 1',
            'slug' => '-'
        ]);
    }
}
