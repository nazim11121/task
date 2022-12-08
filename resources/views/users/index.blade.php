@extends('layouts/contentNavbarLayout')
<link rel="stylesheet" href="{{ asset('assets/datatables4/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/datatables4/css/dataTables.bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/jquery-toast-plugin/jquery.toast.min.css') }}" />
@section('content')
<div class="col-md-12">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Settings / Users /</span> List
    <a href="{{ route('users.create') }}" class="btn btn-primary text-white float-right">Create</a>
  </h4>
</div>
<div class="card">
    <div class="card-body table-responsive">
        <table id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                  <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            
                <?php foreach ($data as $key => $user): ?>
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $user->name }}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-1"></i> <strong>{{ $user->email }}</strong></td>
                        <td>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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