@extends('layouts.layout')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>View Teachers</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">View Teachers</a></li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Details of Teachers</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @php
            $sn=1;
            @endphp
          @foreach ($teachers as $teacher )
            <tr>
                <td>{{$sn}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->dept_id}}</td>
                <td>{{$teacher->designation}}</td>
                <td>{{$teacher->mobile}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->address}}</td>
                <td><button type='button' value='{{$teacher->id}}' class='btn btn-danger' onclick='del(this)'><i class="fas fa-trash text-light"></i></button></td>
            </tr>
            @php $sn++; @endphp
          @endforeach
          </tbody>
        </table>
</div>
<script>
    var newurl="{{route('admin.delteacher')}}";
</script>
<script src="{{asset('adminlayout/js/teacher.js')}}"></script>
@endsection
