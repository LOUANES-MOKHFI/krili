<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
    	$category = Category::where('deleted',0)->paginate(15);
    	return view('admin.category.index',compact('category'));
    }
    
    public function search_category_admin(Request $request){
    	$cat = $request->get('category');
    	$category = Category::where('deleted',0)->where('category','Like','%'.$cat.'%')->paginate(15);
    	return view('admin.category.index',compact('category'));
    }

    public function create(){
    	
    	return view('admin.category.add');
    }

    public function store(CategoryRequest $request,Category $category){
          $id_agence = Auth::user()->id;
          $category -> create([
           'category' => $request->category,
           'id_agence' => $id,
            ]);
          Session()->flash('l\'insertion de categorie a étè faite avec succée');
          return redirect('admin/category');

    }

     public function edit($id){
    	$category = Category::where('deleted',0)->where('id',$id)->where('id_agence',Auth::user()->id)->first();
    	if($category === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.category.edit',compact('category'));
    	}
    	
    }

     public function update(CategoryRequest $request,$id){
          
          $category = Category::where('deleted',0)->where('id',$id)->first();
           $category->category = $request->input('category');
           $category->save();
           
          Session()->flash('la modification de categorie a étè faite avec succée');
          return redirect('admin/category');

    }
    public function destroy($id){
           $category = Category::find($id);
           $category->deleted = 1;
           $category->save();
           Session()->flash('la Supression de categorie a étè faite avec succée');
          return redirect('admin/category');
    }
    public function show(){}
}
