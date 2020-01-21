<?php

namespace App\Http\Controllers\backend;

use App\Models\category;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category_show(){
        /* return view('admin.add-product');*/
        $categories = category:: orderBy('id' , 'desc')->get();
        return view('admin.product_edit')->with('categories' ,$categories);
    }

    public function category_display(){
        /* return view('admin.add-product');*/
        $categories = category:: orderBy('id' , 'desc')->get();
        return view('admin.category')->with('categories' ,$categories);
    }

    public function category_edit($id){
        /* return view('admin.add-product');*/
        $categories = category:: orderBy('id' , 'desc')->where('parent_id',NULL)->get();
        $category = category:: find($id);
        return view('admin.category_edit',compact('category','categories'));
    }

    public function category_edit_submit(Request $request , $id ){
        /* return view('admin.add-product');*/
        $category = category::find($id);
        $category->category_name = $request->category_name;
        /*$product->category_name = $request->category_name;*/
        $category->parent_id = $request->parent_id;
        $category->created_at = $request->created_at;
        $category->updated_at =time();
        $category->save();
        return redirect('admin/category');
    }

    public function category_delete($id){
        /* return view('admin.add-product');*/
        $category = category:: find($id);
       if(!is_null($category)){
           if ($category->parent_id == null ){
               $sub_categories = category:: orderBy('id' , 'desc')->where('parent_id',$category->id)->get();
               foreach ($sub_categories as $sub){
                   $sub->delete();
                  /* File:: exists(link)
                  File :: delete(link*/
               }
               $category->delete();
           }
       }
       return back();
    }

    public function category_insert(){
        $categories = category:: orderBy('id' , 'desc')->where('parent_id',NULL)->get();
         return view('admin.category_add' , compact('categories'));
    }
    
    public function category_store(Request $request){
        /* return view('admin.add-product');*/
        $category = new category();
        $category->category_name = $request->category_name;
        /*$product->category_name = $request->category_name;*/
        $category->parent_id = $request->category_id;
        $category->created_at = time();
        $category->updated_at =time();
        $category->save();
        return redirect('admin/category');
    }

}
