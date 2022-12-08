@extends('layouts/contentNavbarLayout')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Faq /</span> Create
</h4>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Faq Details</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('faq.store') }}" enctype="multipart/form-data">
        	@csrf
          <div class="row">
            <div class="mb-12 col-md-12">
              <label for="faq_title" class="form-label">Faq Title</label><span class="requiredStar" style="color: red"> * </span>
              <input type="text" class="form-control" id="faq_title" name="faq_title" required="" />
            </div>
            <div class="mb-12 col-md-12 mt-4">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button type="reset" class="btn btn-outline-secondary" onclick="window.location='{{ route('faq.index') }}'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
