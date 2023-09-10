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
    private $categoryService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    // public function index(){

    //     $query =  $menus = DB::select("SELECT * FROM menus");
    //     // dd($query);
    //     return view('menus.index', compact('query'));

    // }

    public function index(Request $request)
    {
        $titleSub = 'Menu';
        $data = $this->menuService->getAllMenus();
        if ($request->ajax()) {
    
            return DataTables::of($data)
            
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="detail btn btn-info btn-sm text-white"><i class="fa fa-eye"></i></a> &nbsp; &nbsp;
                    <a href="/menus/' . $row->id . '/edit" class="edit btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a> &nbsp; &nbsp;
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> ';
                    return $actionBtn;
                })
                ->addColumn('category_name', function ($menu) {
                    return $menu->category_name;
                })
                
                ->rawColumns(['action','category_name'])
                ->make(true);
        }

    
        // Return the view for non-AJAX requests
        return view('menus.index', compact('titleSub'));
    }

    public function create()
    {
        // $categories = DB::select('SELECT * FROM categories');
        // return view('products.create', compact('categories'));
        return view('menus.create');
    }
    public function store(Request $request)
    {
        $menu = $this->menuService->createMenu($request->all());

        if ($menu) {
            return redirect()->route('menus.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('menus.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


    public function japanese(Request $request){
        if ($request->ajax()) {
            $data = $this->menuService->getAllMenuJpns();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="detail btn btn-info btn-sm text-white"><i class="fa fa-eye"></i></a> &nbsp; &nbsp;<a href="javascript:void(0)" class="edit btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a> &nbsp; &nbsp;<a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> ';
                    return $actionBtn;
                })
                ->addColumn('category_name', function ($menu) {
                    return $menu->category_name;
                })
                
                ->rawColumns(['action','category_name'])
                ->make(true);
        }
    
        // Return the view for non-AJAX requests
        return view('menus.index');
    }
    


    public function chinese(Request $request){
        if ($request->ajax()) {
            $data = $this->menuService->getAllMenuChns();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="detail btn btn-info btn-sm text-white"><i class="fa fa-eye"></i></a> &nbsp; &nbsp;<a href="javascript:void(0)" class="edit btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a> &nbsp; &nbsp;<a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> ';
                    return $actionBtn;
                })
                ->addColumn('category_name', function ($menu) {
                    return $menu->category_name;
                })
                
                ->rawColumns(['action','category_name'])
                ->make(true);
        }
    
        // Return the view for non-AJAX requests
        return view('menus.index');
    }

    public function edit($id)
    {
        $categories = DB::select("SELECT * FROM categories ");
        $menu = Menu::find($id);
        // dd($menu);
        return view('menus.edit', compact('menu','categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data as needed
    
        // Get the updated data from the request
        $updatedData = [
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            // Add other fields as needed
        ];

        // dd($updatedData);
    
        // Call the updateMenu method to update the menu record
        $updatedMenu = $this->menuService->updateMenu($id, $updatedData);
    
        // Check if the update was successful
        if ($updatedMenu) {
            // Optionally, you can redirect to a success page or return a response
            return redirect()->route('menus.index')->with('success', 'Menu updated successfully');
        } else {
            // Handle the case where the update failed, e.g., display an error message
            return redirect()->back()->with('error', 'Failed to update menu');
        }
    }
    
    


}
