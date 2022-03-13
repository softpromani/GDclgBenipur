@extends('layouts.layout')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Department</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Department</a></li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="card">
    <form method="post" action="{{route('admin.savedepartment')}}">
        @csrf
        <div class="row m-4">
            <div class="col-sm-4">
                <label for="notice_title">Department Name</label>
                <input type="text" name="name" class="form-control" placeholder="Department Name" >
            </div>
            <div class="col-sm-2 mt-4">
                <button type="submit" class="btn btn-primary">Add Department</button>
            </div>

        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Details of Departments</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Department Name</th>
            <th>Uploaded Date</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
            @php
            $sn=1;
            @endphp
          @foreach ($departments as $department )
            <tr>
                <td>{{$sn}}</td>
                <td>{{$department->name}}</td>
                <td>{{$department->updated_at}}</td>
                <td><button type='button' value='{{$department->id}}' class='btn btn-danger' onclick='del(this)'><i class="fas fa-trash text-light"></i></button></td>
            </tr>
            @php $sn++; @endphp
          @endforeach
          </tbody>
        </table>
</div>

<script>
    var newurl="{{route('admin.deldepartment')}}";
</script>
<script src="{{asset('adminlayout/js/department.js')}}"></script>
<script src="{{asset('adminlayout/plugins/toastr/toastr.min.js')}}"></script>
<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
@endsection
