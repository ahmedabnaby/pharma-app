<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => request('quantity'),
            'attributes' => array(
                'image' => $product->image
            ),
            'associatedModel' => $product
        ));
        return redirect()->route('cart');
    }

    public function cart()
    {
        $cartItems =  \Cart::session(auth()->id())->getContent();
        if(session('success'))
        {
            toast(session('success'),'success');
        }
        return view('products.cart', compact('cartItems'));
    }

    public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }
    

}
