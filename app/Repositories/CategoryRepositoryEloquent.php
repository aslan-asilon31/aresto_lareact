<?php 

namespace App\Repositories;
use Illuminate\Http\Request;
use DB;
use Storage;
use App\Models\Category\Category;
use Illuminate\Support\Collection;
use App\Repositories\CategoryRepositoryInterface;
use DataTables;

class CategoryRepositoryEloquent implements CategoryRepositoryInterface
{
    public function getAllCategories()
    {
        $results = DB::select("SELECT * FROM categories ");
    
        return $results;    
    }

}
