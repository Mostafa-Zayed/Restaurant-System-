<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Image;

class SliderController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Slider::simplePaginate(5);
        return view('backend.managment.sliders.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Image::select('id','name')->get();
        return view('backend.managment.sliders.create',compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Rules
        $data = $request->validate([
            'title' => 'required|string|max:255|min:3',
            'link1' => 'required|max:255|url',
            'link2' => 'required|max:255|url',
            'description' => 'required|string',
            'order' => 'required|integer',
            'image_id' => 'required|integer|exists:images,id',
            'status' => 'nullable|in:on'
        ]);
       
        if (Slider::create($data)) {
            session()->flash('success','Slider Created Succefully');
            return redirect()->route('managment.sliders.index');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.managment.sliders.edit',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
