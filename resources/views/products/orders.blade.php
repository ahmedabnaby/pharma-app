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
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
                    @foreach ($order->cart as $item)
                  <td class="product-thumbnail">
                    <img src="pharma/images/{{$item['associatedModel']['image']}}" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">{{$item['name'] }}</h2>
                  </td>
                  <td>${{$item['price'] }}</td>
                  <td>
    
                      {{$item['quantity'] }}
  
                  </td>
                  <td>${{$item['price']*$item['quantity'] }}</td>
                </tr>
                    @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
        </form>
    </div>
    </div>
  </div>
@endsection