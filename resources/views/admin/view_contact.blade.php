@extends('layouts.layout')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>View Contacts</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">View Contacts</a></li>
      </ol>
    </div>
  </div>
</div>

<!-- /.container-fluid -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Details of Contacts</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @php
            $sn=1;
            @endphp
          @foreach ($contacts as $contact )
            <tr>
                <td>{{$sn}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->mobile}}</td>
                <td>{{$contact->message}}</td>
                <td><button type='button' value='{{$contact->id}}' class='btn btn-danger' onclick='del(this)'><i class="fas fa-trash text-light"></i></button></td>
            </tr>
            @php $sn++; @endphp
          @endforeach
          </tbody>
        </table>
</div>
<script>
    var newurl="{{route('admin.delcontact')}}";
    var swname=" Contact";
</script>
<script src="{{asset('adminlayout/js/alertswal.js')}}"></script>
@endsection
