@extends('layouts/contentNavbarLayout')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Category /</span> Create
</h4>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Category Details</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
        	@csrf
          <div class="row">
            <div class="mb-3 col-md-12">
              <label for="name" class="form-label">Category Name</label>
              <input class="form-control" type="text" id="name" name="name" autofocus />
            </div>
            <div class="mb-3 col-md-12">
              <input class="form-check-input" type="checkbox" id="status" name="status" value="1">
              <label for="lastName" class="form-label">Status</label>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('category.list') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
