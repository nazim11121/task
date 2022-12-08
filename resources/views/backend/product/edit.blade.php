@extends('layouts/contentNavbarLayout')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Product /</span> Edit
</h4>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Product Details Edit</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('product.update',$product) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row">
            <div class="mb-12 col-md-12">
              <labe class="form-label">Product Category</label><span class="requiredStar" style="color: red"> * </span>
              <select name="category" class="form-control custom-select" required="">
                @foreach($category as $value)
                  <option value="{{ $value->id }}" @if($value->id == $product->category) selected @endif>{{ $value->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label class="form-label">Product Name</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required="" />
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label class="form-label">Product Price</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" required="" />
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" class="form-control" id="description" name="description" value="{{$product->description}}" rows="3">{{$product->description}}</textarea>
            </div>
            <div class="mb-3 col-md-6 mt-4">
              <label for="image" class="form-label">Image</label><span class="requiredStar" style="color: red"> * </span>
              <img id='img' src="{{ asset('storage/uploads/product') }}/{{$product->image }}" style="width:115px; height:100px; margin-left:2px; margin-bottom: 10px">
              <input type="file" class="form-control" id="image" name="image" data-max-file-size="5M" data-default-file=""/>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('product.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
