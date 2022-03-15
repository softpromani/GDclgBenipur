@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        24 * 7 Internet<br>
         <span><a href="{{route('index')}}">Home </a>/ 24 * 7 Internet</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>24*7 Internet</span>
              </div>

          <p>
  Our campus is provided with<b> 24×7 internet via Wi-Fi,</b> so that the students can use it all the time. In the modern studies, internet has become an integral part, because a vast spectrum of academic information and works are available in the World Wide Web, and the students can access them only by using the internet.
  </p>
  <p>
  In addition to the 24 hour availability, our internet connection features high speed browsing, downloading and uploading activities , so that our students can access or transfer the large files with ease.
  </p>
  <p>
  Due to this facility, our graduates can concentrate on the academics without any constrictions, and this can lead to exceptional performance in the academic examinations.
  </p>
  <p>
  Due to this facility, our graduates can concentrate on the academics without any constrictions, and this can lead to exceptional performance in the academic examinations.
  </p><p>
  The scheme will provide 10 GB data per month. Each student can download or use data up to 1 GB per day. The internet access will only be available for downloading books and study materials. Authority has stated that social network will be prohibited from this scheme.
  </p>



        </div>
          <div class="col-sm-12 col-md-5 pull-right hidden-sm imgmar">
              <img src="{{asset('userlayout/images/internet.jpg')}}" alt=".." > </div>

      </div>

    </div>
  </section>
  <!-- About Us End-->

@endsection
