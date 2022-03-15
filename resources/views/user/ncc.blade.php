@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        NCC<br>
         <span><a href="{{route('index')}}">Home </a>/ NCC</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>National Cadet Corps</span>
              </div>

          <p>
  <b>National Cadet Corps </b>is a Tri-Services Organisation comprising the Army, Navy and Air Force, engaged in grooming the youth –<b> ‘The Leaders of Tomorrow’ </b>– into disciplined and patriotic citizens. The genesis of the NCC can be traced back to the First World War when the Britishers created the University Corps as the second line of defense and to have a large pool of trained youth available for employment into the Armed Forces. </p>
  </p>
  <p>
  After independence the present day NCC under the Ministry of Defence came into existence on 16 Apr 1948 through NCC act XXXI, 1948. NCC was formally inaugurated on 15 Jul 1948 as soon as the schools and colleges reopened after summer vacation. The Girls Division of the NCC was started in Jul 1949. In 1950 Air Wing was added on 01 Apr with one Air squadron each at Bombay and Kolkata. The Naval Wing of the NCC was raised in Jul 1952, thus completing the true representation of all services in the Corps. Presently, NCC has approximately 13 Lakhs Cadets under its fold.
  </p>
  <p>
        </div>
          <div class="col-sm-12 col-md-5 pull-right hidden-sm imgmar">
              <img src="{{asset('userlayout/images/ncc.jpg')}}" alt=".." > </div>

      </div>

    </div>
  </section>
  <!-- About Us End-->

@endsection
