@extends('layouts/contentNavbarLayout')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Category /</span> Edit
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Category Details Edit</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row">
            <div class="mb-3 col-md-12">
              <label for="name" class="form-label">Category Name</label>
              <input class="form-control" type="text" id="name" name="name" value="{{ $category->name }}" autofocus />
            </div>
            <div class="mb-3 col-md-12">
              <label for="lastName" class="form-label">Status</label>
              <input class="form-check-input" type="checkbox" id="status" name="status" value="1" {{  ($category->status == 1 ? ' checked' : '') }}>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('category.list') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
