@extends('layouts/contentNavbarLayout')

<link rel="stylesheet" href="{{ asset('assets/datatables4/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/datatables4/css/dataTables.bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/jquery-toast-plugin/jquery.toast.min.css') }}" />

@section('content')
<div class="col-md-12">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Interest-Rate / </span> List
    <a href="{{ route('interest.create') }}" class="btn btn-primary text-white float-right">Create</a>
  </h4>
</div>
<div class="card">
  <div class="card-body table-responsive">
    <table id="example" class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th>Sl</th>
          <th>Name</th>
          <th>Period</th>
          <th>Percentage</th>
          <th style="width: 110px">Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        
        <?php foreach ($interest as $key => $value): ?>
          <tr>
        		<td>{{ ++$key }}</td>
        		<td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $value->bank_name }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $value->period }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $value->percentage }}</strong></td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('interest.edit',$value->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['interest.destroy', $value->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                    {!! Form::close() !!}
            </td>
          </tr>  
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
@endsection

<script src="{{ asset('assets/datatables4/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/datatables4/js/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('assets/datatables4/js/dataTables.bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
<script src="{{ asset('assets/jquery-toast-plugin/toastDemo.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    @if (session('success'))
    showSuccessToast('{{ session("success") }}');
    @elseif(session('warning'))
    showWarningToast('{{ session("warning") }}');
    @elseif(session('danger'))
    showDangerToast('{{ session("danger") }}');
    @endif
  });
</script>