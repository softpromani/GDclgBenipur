@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Courses<br>
         <span><a href="{{route('index')}}">Home </a>/ Courses</span>
         </h1>
       </div>
     </div>
</section>

<section  class="sectop">
    <div class="container">
       <div class="row">

    <div class="col-sm-12 mb-5" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000" >
                       <br>
                       <div class="col-sm-12 col-md-7 mb-5">
                        <div class="text-effect" style="margin-bottom: 20px;">
                            <span>College Courses</span>
                          </div>
    <p><b><u>
   For College Admission, student have to submit these mentioned certificate alongwith the application form: </b> </u></p>
    <p>Following documents are required essentially at the time of admission. </p>
    <p>
    <ul>
       <li>Photocopy of Marks sheet & Admit Card. </li>
       <li>Recent Three passport size photographs. </li>
       <li>PH Certificate (only for PH candidate).</li>
       <li>Original School Leaving Certificate (SLC)/ College Leaving Certificate (CLC), which will be originaly submited at the college. </li>
    </ul>
    </p>
       </div>

         <div class="col-sm-12 col-md-5 pull-right hidden-sm  imgmar" >
             <img src="{{asset('userlayout/images/cource.jpg')}}" alt=".." height="100%" width="100%" > </div>
               <div class="col-sm-12 mb-5" style="margin-top:30px">




         </div>
         </div>
       </div>
     </div>
   </section>


@endsection
