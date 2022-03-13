@extends('layouts.layout')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Notice</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Notice</a></li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="card">
    <form method="post" action="{{route('admin.savenotice')}}" enctype="multipart/form-data">
        @csrf
        <div class="row m-4">
            <div class="col-sm-4">
                <label for="notice_title">Notice Title</label>
                <input type="text" name="title" class="form-control" placeholder="Notice title" >
            </div>
            <div class="form-check col-sm-1 mt-4 ml-2">
                <input type="radio"class="form-check-input" type="radio" name="filetype" value="file" id="filetype" >File
            </div>
            <div class="form-check col-sm-1 mt-4">
                <input type="radio" class="form-check-input" type="radio" name="filetype" value="link" id="linktype">Link
            </div>
            <div class="col-3" id="uploadfile">
                <label for="upload_file">Upload file</label>
	            <input type="file" class="form-control" id="upload_file" name="file" >
            </div>
            <div class="col-3" id="uploadlink">
                <label for="upload_link">Upload Link</label>
                <input type="text" class="form-control" name="link" id="upload_link" >
            </div>
            <div class="col-sm-2 mt-4">
                <button type="submit" class="btn btn-primary">Add Notice</button>
            </div>

        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Details of all uploaded notices</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Notice Title</th>
            <th>View File/Link</th>
            <th>Uploaded Date</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
            @php
            $sn=1;
            @endphp
          @foreach ($notices as $notice )
            <tr>
                <td>{{$sn}}</td>
                <td>{{$notice->title}}</td>
                @if($notice->type=='file')
                <td><a href="{{asset('upload/notices')}}/{{$notice->filename}}" target="_blank">View</a></td>
                @else
                <td><a href="{{$notice->filename}}" target="_blank">View</a></td>
                @endif

                <td>{{$notice->updated_at}}</td>
                <td><button type='button' value='{{$notice->id}}' class='btn btn-danger' onclick='delnotice(this)'><i class="fas fa-trash text-light"></i></button></td>
            </tr>
            @php $sn++; @endphp
          @endforeach
          </tbody>
        </table>
</div>

<script>
    var newurl="{{route('admin.delnotice')}}";
</script>
<script src="{{asset('adminlayout/js/notice.js')}}"></script>
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
