<?php

namespace App\Http\Controllers;

use App\Academiclevel;
use Illuminate\Http\Request;

class AcademiclevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('academics.create');
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
     * @param  \App\Academiclevel  $academiclevel
     * @return \Illuminate\Http\Response
     */
    public function show(Academiclevel $academiclevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academiclevel  $academiclevel
     * @return \Illuminate\Http\Response
     */
    public function edit(Academiclevel $academiclevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academiclevel  $academiclevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Academiclevel $academiclevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academiclevel  $academiclevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academiclevel $academiclevel)
    {
        //
    }
}
