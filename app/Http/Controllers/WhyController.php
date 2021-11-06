<?php

namespace App\Http\Controllers;

use App\Models\Why;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Why::select('id','title','description')->whereNotNull('status')->get();
        dd($rows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function show(Why $why)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function edit(Why $why)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Why $why)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function destroy(Why $why)
    {
        //
    }
}
