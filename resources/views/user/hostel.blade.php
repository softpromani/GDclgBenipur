@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Hostel<br>
         <span><a href="{{route('index')}}">Home </a>/ Hostel</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>College Hostel</span>
              </div>

          <p>
  A hostel is a place where students usually live and which is managed or controlled by administration. Hostel is basically for those who have to shift to other cities for their studies.
  </p>
  <p>
  After schooling, student moves towards colleges, it may be possible that colleges in which they want to study, may be in the same city or not. If colleges of their choice are not in the same city, then they have to visit into other city for their study.
  </p>
  <p>
  The principal is the warden of the hostel. A member of the staff or a specially appointed deputy warden looks after the day to day affairs and general discipline of the hostel. Vegetarian and non-vegetarian mess is provided in the hostel.
  </p>
  <p>
  The aims and objectives of Hostel are as following-
  </p>
  <p>
  <ul>

  <li>  To provide a home for students and to help new arrivals to become adjusted to the new environment</li>
  <li>To provide a home for students and to help new arrivals to become adjusted to the new environment </li>
  <li>To create awareness to social and moral values for improving the quality of life through education </li>
  <li>Hostel life taught student to live independently, and how to deal with the other students and roommates </li>
  <li>Hostel life teaches a student regularity and punctuality.</li>



  </ul>


  </p>
  <p>
  Its aim is to grow student emotionally, mentally, psychologically.
  </p>


        </div>
          <div class="col-sm-12 col-md-5 pull-right hidden-sm imgmar">
              <img src="{{asset('userlayout/images/hostal.jpg')}}" alt=".." > </div>

      </div>

    </div>
  </section>
  <!-- About Us End-->

@endsection
