@extends('layouts.app')
@section('content')
<div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cartItems as $cartItem)
                <tr>
                  <td class="product-thumbnail">
                    <img src="pharma/images/{{$cartItem->attributes->image}}" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">{{$cartItem->name}}</h2>
                  </td>
                  <td>$55.00</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;margin-right:auto;margin-left:auto;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="{{$cartItem->quantity}}" placeholder=""
                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>
  
                  </td>
                  <td>${{$cartItem->price}}</td>
                  <td><a href="{{route('cart.destroy',$cartItem->id)}}" class="btn btn-primary height-auto btn-sm">X</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </form>
      </div>
  
      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6">
              <a href="{{route('home')}}" class="btn btn-outline-primary btn-md btn-block">Continue Shopping</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="text-black">Discount</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">$0</strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">${{Cart::getTotal()}}</strong>
                </div>
              </div>
                {{-- <form action="{{route('saveOrder')}}"></form> --}}
              <div class="row">
                <div class="col-md-12">
                  <a href="{{route('saveOrder')}}" class="btn btn-primary btn-lg btn-block" type="submit">View Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection