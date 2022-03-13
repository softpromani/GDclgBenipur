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
      <h1>Add Teacher</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Add Teacher</a></li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="card">
    <form method="post" action="{{route('admin.saveteacher')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Teacher Name<span class="clcl"> *</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Teacher Name" autocomplete="off" required />
                </div>
                <div class="col-md-6">
                    <label>DOB<span class="clcl"> *</span> </label>
                    <input type="date" placeholder="DOB" name="dob" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Gender<span class="clcl"> *</span></label>
                    <select name="gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Father's Name<span class="clcl"> *</span> </label>
                    <input type="text" placeholder="Father's Name" name="fname" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Mobile No.<span class="clcl"> *</span></label>
                    <input type="number" class="form-control" name="mobile" placeholder="Mobile No." required />
                </div>
                <div class="col-md-6">
                    <label>Email Id<span class="clcl"> *</span> </label>
                    <input type="email" placeholder="Email Id" name="email" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Department<span class="clcl"> *</span></label>
                    <select name="dept" class="form-control" required>
                        <option value="">Select Department</option>
                        @foreach ($departments as $department )
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Designation<span class="clcl"> *</span></label>
                    <input type="text" placeholder="Designation" name="designation" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Highest Qualification<span class="clcl"> *</span></label>
                    <input type="text" placeholder="Highest Qualification" name="qualification" class="form-control" required />
                </div>
                <div class="col-md-6">
                    <label>Address<span class="clcl"> *</span></label>
                    <input type="text" placeholder="Address" name="address" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <div class="row">
                <div class="col-md-6">
                    <label>Select Teacher Pic<span class="clcl"> *</span></label>
                    <input type="file"  name="file"  class="form-control"  required />
                </div>
            </div>
            <div class="col-sm-2 mt-4">
                <button type="submit" class="btn btn-primary">Add Teacher</button>
            </div>
        </div>

    </form>
</div>


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
