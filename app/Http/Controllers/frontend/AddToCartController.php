<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\AddToCart;
use App\Models\product;
use App\User;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function add_to_cart($id){
        $username=session('name');
        /*dd($username);*/
        $user = User::where ('username',$username)->first();
        $userID = $user->id;
        $product = product:: find($id);
        $cartProduct= AddToCart:: where ('product_id', $id)
                                    ->where('username', $username)
                                    ->first();
        if (is_null($cartProduct)){
            $item = new AddToCart();
            $item->username=$username;
            $item->user_id = $userID;
            $item->product_id=$product->id;
            $item->product_name=$product->product_name;
            $item->price=$product->price;
            $item->quantity=1;
            $item->total_price=$product->price * 1;
            $item->save();
        }else{
            $cartItem= AddToCart:: where ('product_id', $id)
                                    ->where('username', $username)
                                    ->first();
            $cartItem->quantity=$cartProduct->quantity + 1;
            $cartItem->total_price=($cartProduct->quantity + 1)* $product->price;
            $cartItem->save();
        }
        return redirect()->to(route('home.product-grid'));
    }

    public function remove($id){
        $item = AddToCart::find($id);
        /*dd($item);*/
        if (! is_null($item)){
            $item->delete();
        }
        return redirect(route('home.product-grid'));
    }

    public function updateCartItem($id, $quantity)
    {
           $item = new AddToCart();
           $item = $item->find($id);
            $item->quantity=$quantity;
            $item->total_price= $item->price * $item->quantity;
            if($item->save())
                return true;
            else
                return false;
    }

    public function cartUpdate(Request $request){
       
         $i = 0;
          $ids = $request->id;
          foreach ($ids as $id) {
             $r = $this->updateCartItem($id, $request->quantity[$i++] );
             
          }

          return redirect()->route('home.view-cart')->with([
                  "success" => "Cart Updated Successfully"
          ]);


    }

}
