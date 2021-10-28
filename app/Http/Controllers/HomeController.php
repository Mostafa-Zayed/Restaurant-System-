<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Slider;
class HomeController extends Controller
{
    public function index()
    {
        $pages = Page::select('id','name')->whereNotNull('status')->orderBy('order')->get();
        $sliders = Slider::select('title','description','link1','link2','order','image_id')->whereNotNull('status')->orderBy('order')->get();
        
        return view('frontend.index',['pages' => $pages,'sliders' => $sliders]);
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
