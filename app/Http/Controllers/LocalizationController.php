<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class LocalizationController extends Controller
{
    public function index()
    {
        $locale = App::currentLocale();
        $data = Post::where('lang', $locale)->get();
        Lang::set('general.title', 'cobaa title');
        return view('welcome', compact('$locale'));
    }
    
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }



}
