@extends('layouts.app')
@section('content')
<div class="row">
    @isset($product)
        @if( ((count($product)) === 0))
                  <h3>No medicines!</h3>
         @else
         @foreach ($product as $product_)

    <div class="col-sm-6 col-lg-4 text-center item mb-4">
      <span class="tag">Sale</span>
      <a href="{{route('products.show',$product_->id)}}"> <img src="pharma/images/{{$product_->image}}" alt="Image"></a>
      <h3 class="text-dark"><a href="{{route('products.show',$product_->id)}}">{{$product_->name}}</a></h3>
      <p class="price">${{$product_->price}}</p>
    </div>
    @endforeach
      @endif
  @endisset 
  </div>
@endsection