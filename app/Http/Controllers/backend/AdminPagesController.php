<?php

namespace App\Http\Controllers\backend;

use App\Models\category;

use App\Models\productImage;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use phpDocumentor\Reflection\Location;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function add_product(){
       /* return view('admin.add-product');*/
        $categories = category:: orderBy('id' , 'desc')->get();
        return view('admin.add-product')->with('categories' ,$categories);
    }

    public function product_store(Request $request ){

        $request->validate([
            'product_name' => 'required|max:255',
            'category_id' => 'required',
            'product_details' => 'required|max:255',
            'product_quantity' => 'required|numeric',
            'product_status' => 'required|numeric',
            'offer_price' => 'required|numeric',
        ]);
        $ID = $request->category_id;
        $cat = category:: find($ID);
        $catName = $cat->category_name;

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_name = $catName;
        $product->category_id = $request->category_id;
        $product->description = $request->product_details;
        $product->quantity = $request->product_quantity;
        $product->price = $request->product_price;
        $product->status = $request->product_status;
        $product->offer_price = $request->offer_price;
        $product->save();

        if(($request->product_image)>0){
            foreach ($request->product_image as $img){

                    //put file info in $img variable
                   // $img =$request->file('product_image');
                    // new name create
                    $image =rand().'_'.time().'.'.$img->getClientOriginalExtension();
                    $img->move(public_path('product_images/'), $image);
                    $destination = 'product_images/'. $image;
                    echo $destination;
                    $product_image= new productImage();
                    $product_image->product_id= $product->id;
                    $product_image->product_image=$destination;
                    $product_image->save();

            }
        }
        return redirect('admin/products');
    }
    public function products_show(){
        $products = product :: orderby('id' , 'desc')->get();
        return view('admin.products')->with('products' , $products);
    }
    public function product_edit($id){
        $product = product :: find($id);
        return view('admin.product_edit')->with('product' , $product);
    }

    public function product_edit_submit(Request $request,$id){
        $request-> validate([
            'product_name' => 'required|max:255',
//            'category_name' => 'required',
            'product_details' => 'required|max:255',
            'product_quantity' => 'required|numeric',
            'product_status' => 'required|numeric',
            'offer_price' => 'required|numeric',
        ]);

        $product =  Product:: find($id);
        $product->product_name = $request->product_name;
        /*$product->category_name = $request->category_name;*/
        $product->description = $request->product_details;
        $product->quantity = $request->product_quantity;
        $product->price = $request->product_price;
        $product->status = $request->product_status;
        $product->offer_price = $request->offer_price;
        $product->save();
        return redirect('admin/products');
    }
    public function product_delete($id){
        $product = product::find($id);
        if(!is_null($product)){
            $product->delete();
        }
        return back();

    }
}
