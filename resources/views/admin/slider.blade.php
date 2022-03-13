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
      <h1>Add Slider</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Add Slider</a></li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="card">
    <form method="post" action="{{route('admin.saveslider')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Text 1<span class="clcl"> *</span></label>
                    <input type="text" class="form-control" name="text1" placeholder="Text 1" autocomplete="off" required />
                </div>
                <div class="col-md-6">
                    <label>Text 2<span class="clcl"> *</span></label>
                    <input type="text" class="form-control" name="text2" placeholder="Text 2" autocomplete="off" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Upload Image<span class="clcl"> *</span></label>
                    <input type="file"  name="file"  class="form-control"  required />
                </div>
            </div>
            <div class="col-sm-2 mt-4">
                <button type="submit" class="btn btn-primary">Add Image</button>
            </div>
        </div>

    </form>
</div>

<!-- /.container-fluid -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Details of Sliders</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Image</th>
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
          @foreach ($sliders as $slider )
            <tr>
                <td>{{$sn}}</td>
                <td>{{$slider->text1}}</td>
                <td>{{$slider->text2}}</td>
                <td>{{$slider->updated_at}}</td>
                <td><button type='button' value='{{$slider->id}}' class='btn btn-danger' onclick='del(this)'><i class="fas fa-trash text-light"></i></button></td>
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
