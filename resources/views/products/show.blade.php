@extends('layouts.app')
@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="{{asset('pharma/images/'.$product->image)}}" alt="Image" class="img-fluid p-5">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{$product->name}}</h2>
          <p>{{$product->description}}.</p>
          

          <p><strong class="text-primary h4">${{$product->price}}</strong></p>

          
          
          
          <form action="{{route('cart.add',$product->id)}}" method="get">
            <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 220px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                  <input type="text" class="form-control text-center" value="1" placeholder=""
                    aria-label="Example text with button addon" name="quantity" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>
      
              </div>
            <button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Request Cheque</button>
          </form>
          {{-- <p><a href="{{route('cart.add',$product->id)}}" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p> --}}

        </div>
      </div>
    </div>
  </div>

@endsection