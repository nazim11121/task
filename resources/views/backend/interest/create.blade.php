@extends('layouts/contentNavbarLayout')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Interest Rate/</span> Create
</h4>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Interest Rate Details</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('interest.store') }}" enctype="multipart/form-data">
        	@csrf
          <div class="row">
            <div class="mb-12 col-md-12">
              <labe class="form-label">Select Bank Name</label><span class="requiredStar" style="color: red"> * </span>
              <select name="bank_name" class="form-control custom-select" required="">
                <option value="">Select one..</option>
                <option value="DBBL">DBBL</option>
                <option value="SCB">SCB</option>
                <option value="EBL">EBL</option>   
              </select>
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label class="form-label">Select Period(Month)</label><span class="requiredStar" style="color: red"> * </span>
              <select name="period" class="form-control custom-select" required="">
                <option value="">Select one..</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="12">12</option>   
              </select>
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label class="form-label">Percentage</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="percentage" name="percentage" required="" />
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('interest.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
