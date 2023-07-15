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
        return Menu::with('category')->get();
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
