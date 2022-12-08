@extends('layouts/contentNavbarLayout')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Settings / Roles /</span> Edit
</h4>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>All Permissions:</strong><br>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success badge rounded-pill bg-dark">{{ $v->name }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
<div class="mt-4">
    <a class="btn py-1 btn-primary" href="{{ route('roles.index') }}"> Back</a>
</div>
@endsection
