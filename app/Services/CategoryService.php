<?php

namespace App\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Storage;
use App\Models\Menu\Menu;
use App\Models\Category\Category;
use Illuminate\Support\Collection;
use App\Repositories\CategoryRepositoryInterface;
use DataTables;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->getAllCategories();
    }

}