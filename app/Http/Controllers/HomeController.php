<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Menu;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // $pages = Page::select('id','name')->whereNotNull('status')->orderBy('order')->get();
        // $sliders = Slider::select('title', 'description', 'link1', 'link2', 'order', 'image_id')->whereNotNull('status')->orderBy('order')->get();
        $pages = Cache::remember('pages', 60, function () {
            return Page::select('id', 'name')->whereNotNull('status')->orderBy('order')->get();
        });

        $sliders = Cache::remember('sliders', 60, function () {
            return Slider::select('title', 'description', 'link1', 'link2', 'order', 'image_id')->whereNotNull('status')->orderBy('order')->get();
        });

        $categories = Cache::remember('categories', 60, function () {
            return Category::select('id', 'name')->whereNotNull('status')->get();
        });

        $menus = Cache::remember('menus', 60, function () {
            return Menu::select('id', 'name', 'description', 'price')->whereNotNull('status')->get();
        });

        $specials = Cache::remember('specials', 60, function () {
            return Menu::select('id', 'name', 'description', 'image_id')->whereNotNull('status')->whereNotNull('special')->get();
        });


        return view('frontend.index', [
            'pages' => $pages,
            'sliders' => $sliders,
            'categories' => $categories,
            'menus' => $menus,
            'specials' => $specials
        ]);
    }

    public function showLogin()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        dd($request->all());
    }

    public function showAdmin()
    {
        return view('backend.welcome');
    }

    public function managment()
    {
        return view('backend.index');
    }

    public function cashier()
    {
        return view('backend.cashier');
    }
}
