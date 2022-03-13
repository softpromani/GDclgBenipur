@extends('layouts.layout')
<style>
    .clcl {
        font-size: 15pt;
        font-weight: bold;
        color: red;
    }
</style>
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Add Time Table</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Time Table</a></li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="card">
    <form method="post" action="{{route('admin.savetimetable')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Title<span class="clcl"> *</span></label>
                    <input type="text" class="form-control" name="text1" placeholder="Title" autocomplete="off" required />
                </div>
                <div class="col-md-6">
                    <label>Session Year<span class="clcl"> *</span></label>
                    <input type="text" class="form-control" name="text2" placeholder="Session Year" autocomplete="off" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Upload Time Table<span class="clcl"> *</span></label>
                    <input type="file"  name="file"  class="form-control"  required />
                </div>
            </div>
            <div class="col-sm-2 mt-4">
                <button type="submit" class="btn btn-primary">Add Time Table</button>
            </div>
        </div>

    </form>
</div>

<!-- /.container-fluid -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Details of Time Table</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>View</th>
            <th>Text 1</th>
            <th>Text 2</th>
            <th>Uploaded Date</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @php
            $sn=1;
            @endphp
          @foreach ($files as $file )
            <tr>
                <td>{{$sn}}</td>
                <td><a href="{{asset('/upload/timetable/').'/'.$file->filename}}" target="_blank" >View</a></td>
                <td>{{$file->title}}</td>
                <td>{{$file->session_year}}</td>
                <td>{{$file->updated_at}}</td>
                <td><button type='button' value='{{$file->id}}' class='btn btn-danger' onclick='del(this)'><i class="fas fa-trash text-light"></i></button></td>
            </tr>
            @php $sn++; @endphp
          @endforeach
          </tbody>
        </table>
</div>
<script>
    var newurl="{{route('admin.deltimetable')}}";
    var swname=" Time Table";
</script>
<script src="{{asset('adminlayout/js/alertswal.js')}}"></script>


@endsection
