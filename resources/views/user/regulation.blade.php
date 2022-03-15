@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Rules & Regulation<br>
         <span><a href="{{route('index')}}">Home </a>/ Rules & Regulation</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>Rules & Regulation</span>
              </div>

          <p>
  The college places a very high emphasis on discipline of students both inside and outside the campus. Students must abide by the college rule and agree to conform to the rules enforced from time to time. They must not do anything either inside or outside the college that may interfere with its discipline and image. Student must attend lectures and practical classes regularly. A minimum attendance of 75% in lectures for each subject is essential for appearing in the Examination. Thus students should attend all theory and practical classes. In case of absence due to illness, student will have to produce Medical Certificate with an application from their parents or guardians. In such case, parents/Guardians should inform the college immediately. In case of absence due to unavoidable circumstances, students are advised to take prior permission.
  </p>
  <p>
  Abstain from using abusive languages or humiliation to other students. No involvement in any fight with other students or staff of the college and respond with proper respect to staff of the college. Breaking of this law will lead to fine, warning, temporary suspension, barring from college or hostel or any other punishment found suitable by the principal and administration.
  </p>

        </div>
          <div class="col-sm-12 col-md-5 pull-right hidden-sm imgmar"> <img src="{{asset('userlayout/images/rule.jpg')}}" alt=".." > </div>

      </div>

    </div>
  </section>
  <!-- About Us End-->

@endsection
