@extends('layouts/contentNavbarLayout')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Slider /</span> Edit
</h4>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Slider Details Edit</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('slider.update',$slider) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row">
            <div class="mb-12 col-md-12">
              <label for="slider_title" class="form-label">Slider Title</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="slider_title" name="slider_title" value="{{$slider->slider_title}}" required="" />
            </div>
            <div class="mb-12 col-md-12 mt-2">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" class="form-control" id="description" name="description" value="{{$slider->description}}" rows="3">{{$slider->description}}</textarea>
            </div>
            <div class="mb-3 col-md-6 mt-2">
              <label for="image" class="form-label">Image</label><span class="requiredStar" style="color: red"> * </span>
              <img id='img' src="{{ asset('storage/uploads/slider') }}/{{$slider->image }}" style="width:320px; height:100px; margin-left:2px; margin-bottom: 10px">
              <input type="file" class="form-control" id="image" name="image" data-max-file-size="5M" data-default-file=""/>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('slider.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
