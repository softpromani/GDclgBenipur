@extends('user.layouts.layout')
@section('content')
<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Contact Us<br>
         <span><a href="{{route('index')}}">Home </a>/ Contact Us</span>
         </h1>
       </div>
     </div>
</section>

<section id="contactus" class="contactus">
    <div class="container">

      <div class="row">
        <div class="col-sm-3 ">
          <div class="contact-list heg">
            <div class="center">
              <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
            </div>
            <h3>College Address</h3>
            <h4>S. D. G. D. College </h4>
          <p>
            Benipur(Laxmanpur) - 847201, Bihar
               </p>

          </div>
        </div>
        <div class="col-sm-3">
          <div class="contact-list heg">
            <div class="center">
              <div class="contact-icon"><i class="fa fa-phone"></i></div>
            </div>
            <h3>College Contact No.</h3>
            <h4>Telephone No.</h4>
            <p>Phone: +91 9931759484</p>


          </div>
        </div>

        <div class="col-sm-3">
          <div class="contact-list heg">
            <div class="center">
              <div class="contact-icon"><i class="fa fa-envelope"></i></div>
            </div>
            <h3>Our Email Contacts</h3>
            <h4>submit your enquiry here</h4>
            <p><a href="gdcollegebegusarai2@gmail.com">psdgdcb@gmail.com</a></p>


          </div>
        </div>
            <div class="col-sm-3">
          <div class="contact-list heg">
            <div class="center">
              <div class="contact-icon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
            </div>
            <h3>SOCIAL MEDIA</h3>
            <h4>submit your enquiry here</h4>
           <p class="center">
            <a href="#"> <i class="fa fa-facebook-official soc m-0 p-0"  aria-hidden="true" ></i></a>
            <a href="#"> <i class="fa fa-google-plus soc m-0 p-0" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-twitter-square soc m-0 p-0" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-youtube-square soc m-0 p-0" aria-hidden="true"></i></a>
          </p>


          </div>
        </div>
      </div>
      <div class="row offset-top-60" 	>
        <div class="col-sm-6 " >
         <div class="shadow-lg p-4 mb-5 mt-5 bg-light rounded ">
        <form action="{{route('savecontact')}}" method="post">
            @csrf
    <div class="form-group ">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxx
      @example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Your Name</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
    </div>
      <div class="form-group">
      <label for="exampleFormControlInput1">Your Mobile No</label>
      <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="xxxx-xxxxx">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1"> Message </label>
      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your Message Here "></textarea>
    </div>
    <br/>
    <button type="submit" class="btn btn-danger btn-lg ">Save Contact</button>
  </form>

          </div>
       </div>
        <div class="col-sm-6">
          <div class="google-map">

         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14333.759824098812!2d86.1369927!3d26.0845534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe046d0ae6e460fce!2sSub-divisional%20Govt%20Degree%20College%20Benipur!5e0!3m2!1sen!2sin!4v1647245543961!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   </div>
        </div>
      </div>
    </div>

  </section>
  @section('script_area')
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

@endsection
