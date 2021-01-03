@extends('layouts.app')
@section('content')
<div class="row">
    @foreach ($products as $product)
    <div class="col-sm-6 col-lg-4 text-center item mb-4">
      <span class="tag">Sale</span>
      <a href="{{route('products.show',$product->id)}}"> <img src="pharma/images/{{$product->image}}" alt="Image"></a>
      <h3 class="text-dark"><a href="{{route('products.show',$product->id)}}">{{$product->name}}</a></h3>
      <p class="price">${{$product->price}}</p>
      {{-- <form method="POST" action="{{route('products.destroy',$product->id)}}">
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Remove</button>
      </form> --}}
      <form action="{{ route('products.destroy', $product->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Remove</button>
      </form>
    </div>
    @endforeach
  </div>
@endsection