<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use DB;
use Storage;
use Illuminate\Support\Collection;
use App\Services\MenuService;
use DataTables;
use Illuminate\Support\Facades\Http;


class CategoryController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::all();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<td class="text-center">
                                <form onsubmit="return confirm(\'Apakah Anda Yakin ?\');" action="' . route('categories.destroy', $data->id) . '" method="POST">
                                    <a href="' . route('categories.edit', $data->id) . '" class="btn btn-sm btn-primary">EDIT</a>
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        // Return the view for non-AJAX requests
        return view('categories.index');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cs $cs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cs $cs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cs $cs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cs $cs)
    {
        //
    }
}
