@extends('layouts/contentNavbarLayout')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Interest Rate /</span> Edit
</h4>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Interest Rate Details Edit</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('interest.update',$interest) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row">
            <div class="mb-12 col-md-12">
              <labe class="form-label">Select Bank Name</label><span class="requiredStar" style="color: red"> * </span>
              <select name="bank_name" class="form-control custom-select" required="">
                <option value="">Select one..</option>
                <option value="DBBL" {{$interest->bank_name == 'DBBL' ? 'selected' : ''}}>DBBL</option>
                <option value="SCB" {{$interest->bank_name == 'SCB' ? 'selected' : ''}}>SCB</option>
                <option value="EBL" {{$interest->bank_name == 'EBL' ? 'selected' : ''}}>EBL</option>   
              </select>
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label class="form-label">Select Period(Month)</label><span class="requiredStar" style="color: red"> * </span>
              <select name="period" class="form-control custom-select" required="">
                <option value="">Select one..</option>
                <option value="3" {{$interest->period == '3' ? 'selected' : ''}}>3</option>
                <option value="6" {{$interest->period == '6' ? 'selected' : ''}}>6</option>
                <option value="12" {{$interest->period == '12' ? 'selected' : ''}}>12</option>   
              </select>
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label class="form-label">Percentage</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="percentage" name="percentage" value="{{$interest->percentage}}" required="" />
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('interest.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
