<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\Menu\MenuController;

// Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menus', [App\Http\Controllers\Menu\MenuController::class, 'index']);

