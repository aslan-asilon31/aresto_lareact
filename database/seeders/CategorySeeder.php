<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category\Category;

class CategorySeeder extends Seeder
{


    public function run(): void
    { 
        Category::create([
            'name' => 'appetizer',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'main-course',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'seafood',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'pasta-and-noodles',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'pizza',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'burger-and-sandich',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'steak-and-grilled-meat',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'salad',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'soup',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'sushi-and-sashimi',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'vegetarian-dishes',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'asian-dishes',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'italian-dishes',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'middle-eastern-dishes',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'soft-drinks',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'mineral-water',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'coffe',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'tea',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'fruit-juice',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'cocktail',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        
        Category::create([
            'name' => 'beer',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
        Category::create([
            'name' => 'wine',
            'image' => 'image.jpg',
            'slug' => '-',
        ]);
    }
}
