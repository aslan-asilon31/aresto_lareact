<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Storage;
use App\Models\Menu\Menu;
use Illuminate\Support\Collection;
use App\Services\MenuService;
use DataTables;
use Illuminate\Support\Facades\Http;

class MenuController extends Controller
{
    private $menuService;

    public function __construct(menuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->menuService->getAllMenus();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="detail btn btn-info btn-sm"><i class="fa fa-eye"></i></a><a href="javascript:void(0)" class="edit btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> ';
                    return $actionBtn;
                })
                ->addColumn('category_name', function ($menu) {
                    return $menu->category->name;
                })
                
                ->rawColumns(['action','category_name'])
                ->make(true);
        }
    
        // Return the view for non-AJAX requests
        return view('menus.index');
    }
}
