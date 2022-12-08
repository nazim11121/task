@extends('layouts/contentNavbarLayout')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Settings / Users /</span> Create
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Users Details</h5>
      <!-- Account -->
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">User's Name</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="name" name="name" required="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Email</label><span class="requiredStar" style="color: red"> * </span>
              <input type="email" class="form-control" id="email" name="email" required="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="mobile" class="form-label">Password</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="password" name="password" required="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="mobile" class="form-label">Mobile</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="mobile" name="mobile" required="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="mobile" class="form-label">Confirm Password</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="confirm-password" name="confirm-password" required="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="roles" class="form-label">Role</label><span class="requiredStar" style="color: red"> * </span>
              <select name="roles" class="form-control custom-select" required="">
                <option value="">Select one..</option>
                @foreach($roles as $value)
                  <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
              </select>
             <!--  {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} -->
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" name="image">
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('users.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection