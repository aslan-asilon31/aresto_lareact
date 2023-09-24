<?php 

namespace App\Repositories;
use Illuminate\Http\Request;
use DB;
use Storage;
use App\Models\Menu\Menu;
use Illuminate\Support\Collection;
use App\Repositories\MenuRepositoryInterface;
use DataTables;

class MenuRepositoryEloquent implements MenuRepositoryInterface
{
    public function getAllMenus()
    {
        $results = DB::select("SELECT
        a.*,
        b.name AS category_name
        FROM
            menus AS a
        INNER JOIN
            categories AS b
        ON
            a.cat_id = b.id");
    
        return $results;    
    }

    public function getAllMenuJpns()
    {
        // return Menu::with('category')->get();
        $results = DB::select("SELECT
        a.*,
        b.id AS menu_id,
        c.name AS category_name
        FROM
            menu_jpns AS a
        INNER JOIN
            menus AS b ON a.menu_id = b.id
        INNER JOIN
            categories AS c ON b.category_id = c.id;
        ");
    
        return $results;    
    }

    public function getAllMenuChns()
    {
        // return Menu::with('category')->get();
        $results = DB::select("SELECT
        a.*,
        b.id AS menu_id,
        c.name AS category_name
        FROM
            menu_chns AS a
        INNER JOIN
            menus AS b ON a.menu_id = b.id
        INNER JOIN
            categories AS c ON b.category_id = c.id;
        ");
    
        return $results;    
    }

    public function getMenuById($id)
    {
        $results = DB::table('menus AS a')
        ->select('a.*', 'b.name AS category_name')
        ->join('categories AS b', 'a.category_id', '=', 'b.id')
        ->where('a.id', $id)
        ->first();
    
        return $results;  
    }

    public function createMenu(array $data)
    {
        return Menu::create($data);
    }

    public function updateMenu($id, array $data)
    {
        DB::table('menus')
            ->where('id', $id)
            ->update($data);
    
        // Optionally, you can return the updated record
        return DB::table('menus')->find($id);
    }

    public function deleteMenu($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
    }
}
