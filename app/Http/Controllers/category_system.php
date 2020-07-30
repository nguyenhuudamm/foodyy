<?php

namespace App\Http\Controllers;
use App\model_category;
use Illuminate\Http\Request;

class category_system extends Controller
{
    public function index(){
        $category = model_category::paginate(5);
    
        return view('admin.content.category');
        

        
    }

    public function create(){

        return view('admin.content.category.create');
    }

    public function edit(model_category $model_category){

    return view('admin.content.categorytegory.edit',compact('model_category'));
    }

    public function update(Request $request, model_category $model_category)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('admin.content.category.index')
                        ->with('success','Cập nhật danh mục thành công');
    }

    
    public function category_child(){
    	return view('admin.content.category_child');
    }

}
