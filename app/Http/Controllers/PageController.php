<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Page::simplePaginate(10);
        return view('backend.managment.pages.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.managment.pages.create');
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
            'name' => 'required|string|max:255|unique:pages,name',
            'order' => 'required|unique:pages,order',
            'status' => 'nullable|in:on'
        ]);

        Page::create($request->all());
        $request->session()->flash('success',ucfirst($request->name). ' is Created Succefully');
        return redirect()->route('managment.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('backend.managment.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('backend.managment.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:pages,name,'.$page->id,
            'order' => 'required|unique:pages,order,'.$page->id,
            'status' => 'nullable|in:on'
        ]);
        $row = $page->update([
            'name' => $request->name,
            'order' => $request->order,
            'status' => isset($request->status) ? $request->status : NULL
        ]);
        if($row) {
            session()->flash('success',ucfirst($request->name).' is Updated Succefully');
            return redirect()->route('managment.pages.edit',$page->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if($page->delete()){
            session()->flash('success',ucfirst($page->name). ' is Deleted Succefully');
            return redirect()->route('managment.pages.index');
        }
    }
}
