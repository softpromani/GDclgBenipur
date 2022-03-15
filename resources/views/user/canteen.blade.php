@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Canteen<br>
         <span><a href="{{route('index')}}">Home </a>/ Canteen</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>College Canteen</span>
              </div>

          <p>
  The ideal school canteen is one that caters to the broadest possible clientele – taking into account if their patrons identify as vegetarian, vegan, kosher, halal, coeliac, lactose intolerant, have a nut allergy, or have no such dietary requirements.
  </p>
  <p>
  We try to provide good food in canteen inside college so students need not to go outside the college gate to have their lunch.
  </p>
  <p>
  Canteen Has Facility Of:
  </p>
  <p>
  <ul>

  <li>  Vegetarian</li>
  <li>Non-vegetarian  </li>
  <li>Fast Food </li>
  </ul>
  </p>
  <p>
  Food provided in canteen is fully hygienic with neat and clean Environment.
  </p>
        </div>
          <div class="col-sm-12 col-md-5 pull-right hidden-sm imgmar">
              <img src="{{asset('userlayout/images/canteen.jpg')}}" alt=".." > </div>
      </div>

    </div>
  </section>
  <!-- About Us End-->

@endsection
