<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    // protected $table = 'vw_menus_modified';
    protected $table = 'menus';
    protected $primaryKey = 'id';

    // protected $fillable = [
    //     'category_id',
    //     'name',
    //     'image',
    //     'price',
    //     'description',
    // ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category\Category');
    }
}
