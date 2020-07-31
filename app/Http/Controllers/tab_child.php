<?php

namespace App\Http\Controllers;

use App\model_tab_childs;
use Illuminate\Http\Request;

class tab_child extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = model_tab_childs::all();
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
     * @param  \App\model_tab_childs  $model_tab_childs
     * @return \Illuminate\Http\Response
     */
    public function show(model_tab_childs $model_tab_childs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model_tab_childs  $model_tab_childs
     * @return \Illuminate\Http\Response
     */
    public function edit(model_tab_childs $model_tab_childs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model_tab_childs  $model_tab_childs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, model_tab_childs $model_tab_childs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model_tab_childs  $model_tab_childs
     * @return \Illuminate\Http\Response
     */
    public function destroy(model_tab_childs $model_tab_childs)
    {
        //
    }
}
