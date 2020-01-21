<?php

namespace App\Http\Controllers\frontend;

use App\Models\AddToCart;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $categories = category:: orderBy('id' , 'desc')->get();
        $allProducts = product:: orderBy('id' , 'desc')->take(8)->get();
        return view('index', compact('allProducts','categories'));
       /* return view('index')->with('allProducts' ,$products);*/
    }

    public function product_grid()
    {
        $categories = category:: orderBy('id','desc')->get();
    	$products = product:: orderBy('id' , 'desc')->paginate(12);
        return view('product-grid' , compact('categories','products'));
    }
    public function product_details($id){
        $categories = category:: orderBy('id' , 'desc')->get();
        $product = product::find($id);
       /* $product->*/
        /*echo '<pre>';
        echo $product;
        echo '</pre>';*/
        $productCat= $product->category_id;
        $categoryProduct= product::orderBy('id' , 'desc')->WHERE('category_id',$productCat)->take(4)->get();
        return view('product-details', compact('product','categories','categoryProduct'));
    }
    public function contact(){
        return view('contact');
    }
    public function search(request $request){
        $search = $request->search;
        $products = product:: orWhere('product_name', 'like', '%'.$search.'%')
            ->orWhere('category_name', 'like', '%'.$search.'%')
            ->orderBy('id', 'desc')->paginate(6);
        return view('product-search' , compact('search','products'));

    }
    public function loginOrRegistration(){
        return view('login-or-registration');
    }
    public function checkout(){
        return view('checkout');
    }
    public function view_cart(){
        $username = session('name');
        $cartItem = AddToCart:: where('username' , $username)->get();
        /*dd('ami asiii');*/
        /*return redirect(route('home.view-cart') , compact('cartItem'));*/
        return view('cart' , compact('cartItem'));
    }


}
