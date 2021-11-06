<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Menu::simplePaginate(10);
        return view('backend.managment.menus.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->whereNotNull('status')->get();
        $images = Image::select('id', 'name')->get();
        return view('backend.managment.menus.create', compact('categories', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255|min:3|unique:menus,name',
            'price' => 'required',
            'category_id' => 'required|integer|exists:categories,id|not_in:0',
            'image_id' => 'nullable|integer|exists:images,id|not_in:0',
            // 'content' => 'required|string',
            'discount' => 'nullable|max:3',
            'status' => 'nullable|in:on',
            'special' => 'nullable|in:on',
            // 'menu-trixFields' => 'required'
        ]);

        // dd($request->all());
        if (Menu::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image_id' => $request->image_id,
            'discount' => $request->discount,
            'status' => $request->status,
            'special' => $request->special,
            'menu-trixFields' => request('menu-trixFields'),
        ])) {
            
            session()->flash('success', ucfirst($request->name) . ' Menu is Created Successfully');
            return redirect()->route('managment.menus.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('backend.managment.menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('backend.managment.menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
