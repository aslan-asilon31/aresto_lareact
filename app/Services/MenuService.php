<?php

namespace App\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Storage;
use App\Models\Menu\Menu;
use Illuminate\Support\Collection;
use App\Repositories\MenuRepositoryInterface;
use DataTables;

class MenuService
{
    protected $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function getAllMenus()
    {
        return $this->menuRepository->getAllMenus();
    }

    public function getMenuById($id)
    {
        return $this->menuRepository->getMenuById($id);
    }

    public function createMenu(array $data)
    {
        return $this->menuRepository->createMenu($data);
    }

    public function updateMenu($id, array $data)
    {
        return $this->menuRepository->updateMenu($id, $data);
    }

    public function deleteMenu($id)
    {
        $this->menuRepository->deleteMenu($id);
    }
}