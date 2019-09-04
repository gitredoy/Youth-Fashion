<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){

        $product = Product::find($request->id);

        cart::add([
            'id'=> $request -> id,
            'name'=> $product -> product_name,
            'price'=> $product -> product_price,
            'qty'=> $request -> qty,
            'options' =>[
                'image'=> $product -> product_image
            ]
        ]);

        return redirect('/cart/show');

    }

    public function ShowCart(){
        $cartProduct = cart::content();

        return view('front-end.cart.show-cart',[
            'cartProduct'=> $cartProduct
        ]);
    }

    public function deleteCart($id){
        cart::remove($id);

        return redirect('/cart/show');
    }

    public function updateCart(Request $request){
        cart::update($request->rowId,$request->qty);
        return redirect('/cart/show');
    }
}
