@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        NSS<br>
         <span><a href="{{route('index')}}">Home </a>/ NSS</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>National Service Scheme</span>
              </div>
          <p>
  To combine academic activities with social service and to install a sense of service to the nation a unit of the N.S.S. was started in the academic session 1977-78. Since then the scheme has expanded and there are Three unites with a total strength of 100 boys and a women’s wing consisting of 50 girls it work under N.S.S. of Utkal university.
  </p>
  <p>
  After students are enrolled and allotted a unit he/she will have to attend camps & get involved in other activities as directed by the N.S.S. officers. Three camps are organized in a year for each unit some of the activities of the NSS are :-
  </p>
  <p>
  <ul>
  <li>Cleanness drive in the community in and around the campus and villages nearby.  </li>
  <li> Instilling civic sense in the community and among the local people </li>
  <li>  Literacy drive by such schemes as conductive adults literacy camps and night schools.</li>
  <li>  Plantation Schemes.</li>
  <li>Schemes for rural Re-construction.  </li>
  <li>Any such scheme envisaged by the Govt.  </li>
  </ul>
  </p>
        </div>
          <div class="col-sm-12 col-md-5 pull-right hidden-sm imgmar">
               <img src="{{asset('userlayout/images/nss.jpg')}}" alt=".." > </div>

      </div>

    </div>
  </section>
  <!-- About Us End-->

@endsection
