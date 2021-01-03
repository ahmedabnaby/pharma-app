<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
    public function delete()
    {
        return view('products.delete')->with('products',Product::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => request('name'),
            'image' => request('image'),
            'price' => request('price'),
            'description' => request('description'),
        ]);

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('products.show',['product' => Product::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
    public function saveOrder()
    {
        
            $data = array(
                'cart' => base64_encode(serialize(\Cart::session(auth()->id())->getContent())),
                  );
            $order = collect($data);
            Session::push('order', $order);
            
            return redirect()->route('viewOrder');
       
    }
    public function viewOrder()
    {
        
        $orders=Session::get('order');
        foreach ($orders as $order);
        auth()->user()->orders()->create([
            'cart' => base64_encode(serialize(\Cart::session(auth()->id())->getContent()))
        ]);
        
        \Cart::session(auth()->id())->clear();
            return redirect()->route('orders')->with('success',"Payment done!, Thankyou ;)");
        
    }
}
