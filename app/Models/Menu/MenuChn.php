<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuChn extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'name',
        'image',
        'price',
        'description',
    ];
    
}
