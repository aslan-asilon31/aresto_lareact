<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu\MenuController;

// Route::get('/menus', [MenuController::class, 'index'])->name('menu');
// Route::get('/menus/create', [App\Http\Controllers\Menu\MenuController::class, 'create']);




    // Show the menu
    Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
    

    // Show the create form
    Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');

    // Store a new item in the producr
    Route::post('/menus/store', [MenuController::class, 'store'])->name('menus.store');

    // Show a specific item in the cart
    // Route::get('/menus/{id}', [MenuController::class, 'show'])->name('menus.show');

    // Show the edit form for a specific item in the cart
    // Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');

    // Update a specific item in the cart
    // Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');

    // Remove a specific item from the cart
    // Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');

    // Route::get('/menu-excel', [MenuController::class, 'export_excel'])->name('menus.export');

    // Route::get('/menu-pdf', [MenuController::class, 'export_pdf'])->name('menus.pdf');

    // Route::get('/menu-csv', [MenuController::class, 'export_csv'])->name('menus.csv');

