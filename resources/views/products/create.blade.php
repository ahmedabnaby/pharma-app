@extends('layouts.app')
@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Medicine Details</h2>
          <div class="p-3 p-lg-5 border">
            <form action="{{route('products.store')}}" class="bg-white" method="POST">
                @csrf
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_companyname" class="text-black">Medicine Name<span class="text-danger">*</span> </label>
                <input type="text" class="form-control" id="c_companyname" name="name">
              </div>
            </div>
  
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control" id="c_address" name="image">
              </div>
            </div>

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Price <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="c_phone" name="price" placeholder="Price">
              </div>
            </div>
  
            <div class="form-group">
              <label for="c_order_notes" class="text-black">Medicine Details</label>
              <textarea name="description" id="c_order_notes" cols="30" rows="5" class="form-control"
                placeholder="Details here..."></textarea>
            </div>

            <div class="form-group row">
                <div class="col-lg-12">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Medicine">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- </form> -->
    </div>
  </div>
@endsection