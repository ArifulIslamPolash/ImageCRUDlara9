<?php

namespace App\Http\Controllers;

use App\Models\ImageCrud;
use Illuminate\Http\Request;

class ImageCrudController extends Controller
{
    public function all_products(){
        return view('product');
    }
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
     * @param  \App\Models\ImageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function show(ImageCrud $imageCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageCrud $imageCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageCrud $imageCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageCrud $imageCrud)
    {
        //
    }
}