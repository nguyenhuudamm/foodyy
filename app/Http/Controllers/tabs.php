<?php

namespace App\Http\Controllers;
use App\model_tabs;
use Illuminate\Http\Request;

class tabs extends Controller
{
    public function index(){
        $tabs = model_tabs::all();
    
        return view('admin.content.category', ['tabs' => $tabs]);
        

        
    }

    public function changStatus(Request $request){
        $id = $request->get('id');
        $tab = model_tabs::find($id);
        $status = $tab->status;
        if($status == 1){
            //tat'
            $tab->status = 0;
            $tab->save();
            echo 0;
        }else{
            // mo
            $tab->status = 1;
            $tab->save();
            echo 1;
        }
       
    }

    public function addTab(Request $request){
        $nameTab = $request->get('nameTab');
        $statusTab = $request->get('statusTab'); 
        $tab = new model_tabs();
        $tab->name = $nameTab;
        if($statusTab == ''){
            $tab->status = 0;
        }else{
            $tab->status = 1;
        }
       if( $tab->save()){
            echo $tab->id;
       }else{
           echo -1;
       }
    }
	

        public function editTab(Request $request){
            $id = $request->get('id');
            //$id = 1;
            $tab =  model_tabs::find($id);
            
            echo json_encode($tab);
            
        }

        public function updateTab(Request $request){
            $idTab = $request->get('idTab');
            $nameTab = $request->get('nameTab');
            //$statusTab = $request->get('statusTab'); 
            $tab =  model_tabs::find($idTab);
            $tab->name = $nameTab;
            
            if( $tab->save()){
                echo 1;
            }else{
                echo -1;
            }
        }

        public function deleteTab(Request $request){
            $id = $request->get('id');
            
            $tab =  model_tabs::find($id);
            $tab->delete();
            echo 1;
        }

    // public function create(){

    //     return view('admin.content.category.create');
    // }

    // public function edit(model_category $model_category){

    // return view('admin.content.categorytegory.edit',compact('model_category'));
    // }

    // public function update(Request $request, model_category $model_category)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'detail' => 'required',
    //     ]);
  
    //     $product->update($request->all());
  
    //     return redirect()->route('admin.content.category.index')
    //                     ->with('success','Cập nhật danh mục thành công');
    // }

    
    // public function category_child(){
    // 	return view('admin.content.category_child');
    // }

}
