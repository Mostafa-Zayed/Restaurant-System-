<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Image::simplePaginate(10);
        return view('backend.managment.images.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.managment.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alt' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'width' => 'nullable',
            'heigth' => 'nullable',
            'class' => 'nullable',
            'img_id' => 'nullable'
        ]);
        // dd($request->all());
        $image = $request->file('image');
        
        $imageName = time().'.'.$image->extension();
        $testing = $image->move(public_path('images'),$imageName);
        Image::create([
            'name' => $request->name,
            'title' => $imageName,
            'alt' => $request->alt,
            'width' => $request->width,
            'heigth' => $request->heigth,
            'class' => $request->class,
            'img_id' => $request->img_id
        ]);
        $request->session()->flash('success','Image '.ucfirst($request->name). ' is Created Succefully');
        return redirect()->route('managment.images.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
