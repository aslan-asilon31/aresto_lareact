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
        // return Menu::with('category')->get();
        $results = DB::select("SELECT
        a.*,
        b.name AS category_name
        FROM
            menus AS a
        INNER JOIN
            categories AS b
        ON
            a.category_id = b.id");
    
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
        return Menu::find($id);
    }

    public function createMenu(array $data)
    {
        return Menu::create($data);
    }

    public function updateMenu($id, array $data)
    {
        $menu = Menu::find($id);
        $menu->update($data);
        return $menu;
    }

    public function deleteMenu($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
    }
}
