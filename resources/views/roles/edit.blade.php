@extends('layouts/contentNavbarLayout')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Settings / Roles /</span> Edit
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Roles Details Edit</h5>
      <!-- Account -->
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('roles.update', $role->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
          <div class="row">
            <div class="mb-12 col-md-12">
              <label for="name" class="form-label">Role's Name</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="name" name="name" value="{{ $role->name}}" required="" />
            </div>
            <div class="mb-3 col-md-6 mt-2">
              <div class="form-group">
                  <strong>Permission:</strong><span class="requiredStar" style="color: red"> * </span>
                  <br/>
                  @foreach($permission as $value)
                      <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                      {{ $value->name }}</label>
                  <br/>
                  @endforeach
              </div>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('roles.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
