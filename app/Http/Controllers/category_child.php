<?php

namespace App\Http\Controllers;

use App\model_category_child;
use Illuminate\Http\Request;

class category_child extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = model_category_child::all();
        return view('admin.content.category_child',['categories'=>$categories]);
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
     * @param  \App\model_category_child  $model_category_child
     * @return \Illuminate\Http\Response
     */
    public function show(model_category_child $model_category_child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model_category_child  $model_category_child
     * @return \Illuminate\Http\Response
     */
    public function edit(model_category_child $model_category_child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model_category_child  $model_category_child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, model_category_child $model_category_child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model_category_child  $model_category_child
     * @return \Illuminate\Http\Response
     */
    public function destroy(model_category_child $model_category_child)
    {
        //
    }
}
