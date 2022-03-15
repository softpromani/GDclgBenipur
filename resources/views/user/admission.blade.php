@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Admission<br>
         <span><a href="{{route('index')}}">Home </a>/ Admission</span>
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
                            <span>College Admission</span>
                          </div>
             <p> <b>S.D.G.D. College </b>offers education from the Intermediate level to the under-Graduate level for boys & girls students in all streams viz. science, humanities and social science from the regular courses. It is expected to start Post Graduate courses in some subject from the coming session.
    </p>
    <p>
    Admission process starts in Intermediate class after passing 10th class, whereas admission in Graduation is possible only after passing Intermediate class in Science and Arts faculties.
    </p>
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
              <img src="{{asset('userlayout/images/admi.jpg')}}" alt=".." height="100%" width="100%" > </div>
               <div class="col-sm-12 mb-5" style="margin-top:30px">




         </div>
         </div>
       </div>
     </div>
   </section>


@endsection
