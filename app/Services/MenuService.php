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

    public function getAllMenuJpns()
    {
        return $this->menuRepository->getAllMenuJpns();
    }

    public function getAllMenuChns()
    {
        return $this->menuRepository->getAllMenuChns();
    }

    public function getMenuById($id)
    {
        return $this->menuRepository->getMenuById($id);
    }


    public function createMenu(array $data)
    {
        // dd
        // return $this->productRepository->createProduct($data);
        $this->validateData($data);

        // Upload image
        $imagePath = $this->uploadImage($data['image']);

        // Create the product in the database
        $menu = Menu::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'image' => $imagePath,
            'price' => $data['price'],
            'description' => $data['description'],
        ]);
    }

    private function validateData(array $data)
    {
        // Perform validation here
        // Example:
        // $validator = Validator::make($data, [
        //     'image'     => 'required|image|mimes:png,jpg,jpeg',
        //     'title'     => 'required',
        //     'content'   => 'required'
        // ]);

        // // Check if the validation fails and handle accordingly.
    }

    private function uploadImage(UploadedFile $image)
    {
        $imagePath = $image->storeAs('public/menus', $image->hashName());
        return str_replace('public/menus', '', $imagePath);
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