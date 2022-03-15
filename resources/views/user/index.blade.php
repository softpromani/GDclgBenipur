@extends('user.layouts.layout')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" /> --}}

@section('content')
    <!-- Banner Wrapper Start -->
    <div class="banner-wrapper">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <h1 class="animated1">Sub-Divisional Govt. Degree College, Benipur <br>
                        </h1>
                        <h3 class="animated2">(A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</h3>
                        <a class="animated3" href="#aboutus">Read More <i class="fa fa-caret-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <h1 class="animated1">Sub-Divisional Govt. Degree College, Benipur <br>
                        </h1>
                        <h3 class="animated2">(A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</h3>
                        <a class="animated3" href="#aboutus">Read More <i class="fa fa-caret-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <h1 class="animated1">Sub-Divisional Govt. Degree College, Benipur <br>
                        </h1>
                        <h3 class="animated2">(A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</h3>
                        <a class="animated3" href="#aboutus">Read More <i class="fa fa-caret-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span
                    class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a
                class="right carousel-control" href="#bs-carousel" data-slide="next"><span
                    class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a>
        </div>
    </div>
    <!-- Banner Wrapper End -->

    <!-- Header End -->
    <!-- About Us -->
    <section id="aboutus" class="about-us ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 mt-3">
                    <div class="text-effect" style="margin-bottom: 20px;">
                        <span>Welcome to S.D.G.D. College</span>
                    </div>
                    <p> The foundation stone of<b> S.D.G.D. College, Benipur </b>was laid on 2019. Ideals of this great
                        educationist in fact got translated into reality by<b> Babu Bishwanath Singh Sharma,</b> who helped
                        the embodiment of this Premier Institution of Bihar. <b>S.D.G.D. College, Benipur </b>is a
                        multifaceted college imparting education in Social Sciences & Humanities, Natural Sciences and
                        Commerce from Intermediate to Post Graduation level. Spread over an area of 25 acres in the heart of
                        the town, acknowledged to be the industrial<b> capital of Bihar, </b>this college has been proving
                        its vitality since its inception. It has been a constituent college of<b> L.N. Mithila University,
                            Darbhanga</b> since<b> 1976</b>. </p>
                    <a href="{{ route('about-college') }}" class="btn btn-primary">View More </a>
                </div>
                <div class="col-sm-12 col-md-3 pull-right hidden-sm">
                    <div class="box">
                        <img src="{{ asset('userlayout/images/home1.jpg') }}">
                        <div class="box-content">
                            <span class="post">S.D.G.D. College</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-callouts">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4  callout">
                        <div class="row">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <span><i class="fa fa-paint-brush"></i></span>
                                </div>
                                <h3 class="title">Neat & Clean Environment</h3>
                                <p class="description">We have a lavish green eco-friendly clean campus.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4  callout">
                        <div class="row">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <span><i class="fa fa-book"></i></span>
                                </div>
                                <h3 class="title">Automated Library</h3>
                                <p class="description">We have well equiped fully automated library with 8000 books.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4  callout">
                        <div class="row">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <span><i class="fa fa-users"></i></span>
                                </div>
                                <h3 class="title">Experienced Faculty</h3>
                                <p class="description">The students learn under the guidance of experienced faculties.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4  callout">
                        <div class="row">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <span><i class="fa fa-cogs"></i></span>
                                </div>
                                <h3 class="title">Laboratory Facility</h3>
                                <p class="description">Students get practical exposure while working in well equipped
                                    laboratries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ccol-sm-12 col-md-6 col-lg-4 callout">
                        <div class="row">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <span><i class="fa fa-building"></i></span>
                                </div>
                                <h3 class="title">Largest Infrastructure</h3>
                                <p class="description">We have one of the largest infra-structure with all modern
                                    amenities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4  callout">
                        <div class="row">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <span><i class="fa fa-internet-explorer"></i></span>
                                </div>
                                <h3 class="title">24*7 Internet Facility</h3>
                                <p class="description">Students get facilty of 24*7 Internet availability in the campus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End-->

    <!-- Faculty Start -->
    <section id="faculty" class="faculty">
        <div class="container">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>Our Mentors</span>
            </div>
            <div id="team" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('userlayout/images/team/Fagu.jpg') }}">
                        <div class="box-content">
                            <h3 class="title">Fagu Chauhan</h3>
                            <span class="post">Governer</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('userlayout/images/team/nitish.jpg') }}">
                        <div class="box-content">
                            <h3 class="title">Nitish Kumar</h3>
                            <span class="post">Chief Minister</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('userlayout/images/team/spsingh.jpg') }}">
                        <div class="box-content">
                            <h3 class="title">S.P. Singh</h3>
                            <span class="post">Vice-Chancellor</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('userlayout/images/team/prin.jpeg') }}">
                        <div class="box-content">
                            <h3 class="title">Dr. Ambrish Kumar Jha</h3>
                            <span class="post">Principal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faculty End -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" id="about-us" class="counts">
        <div class="container">

            <div class="row counters position-relative">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Faculty </p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Students</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Courses</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="2019" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>ESTD</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <section id="aboutus" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 ">
                    <div class="text-effect" style="margin-bottom: 20px;">
                        <span>Welcome to S.D.G.D. College</span>
                    </div>
                    <p>
                        <b>S.D.G.D. College, Benipur </b>is one of the oldest colleges of Benipur District. This college is
                        a constituent and multi-disciplinary unit of <b>L.N. Mithila University, Darbhanga.</b> It has also
                        permanent affiliation under Section 2(f) and 12(b) of UGC Act. Our college is imparting education up
                        to Post Graduation level in Science,Arts and Commerce faculties. This college has two study centers
                        of<b> DISTANCE LEARNING </b>also i.e study center of <b>IGNOU & Study center </b>of Directorate of
                        Distance Learning<b> L.N.M.U. Darbhanga.</b>
                    </p>
                    <a href="{{ route('about-college') }}" class="btn btn-primary">View More </a>

                </div>
                <div class="col-sm-12 col-md-3 pull-right hidden-sm">
                    <div class="box">
                        <img src="{{ asset('userlayout/images/team/prin.jpeg') }}">
                        <div class="box-content">
                            <h3 class="title">Dr. Ambrish Kumar Jha</h3>
                            <span class="post">Principal</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials Start -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">

                    <div class="text-effect" style="margin-bottom: 20px;">
                        <span>Our Testimonials</span>
                    </div>
                    <div class="tab-panel">
                        <ul class="nav nav-tabs ">
                            <li class="active"> <a href="#tab_default_1" data-toggle="tab">Students</a> </li>
                            <li> <a href="#tab_default_2" data-toggle="tab">Parents</a> </li>
                            <li> <a href="#tab_default_3" data-toggle="tab">Faculty</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="testimonials-list owl-carousel owl-theme">
                                    <div class="item">
                                        <h4><strong>Ayush Singh</strong> BSc. - Maths<br>
                                        </h4>
                                        <p>I have had a very good time at Women's College. All the teachers are very
                                            friendly and enthusiastic. The lessons are very varied and inspiring. Thank you
                                            very much!!!.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Khushi Pandey</strong> BA. - Hindi<br>
                                        </h4>
                                        <p>Helpful and ample material, motivated and inspirational faculty. Great feedback….
                                            Constructive and helpful. Thank you.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Abhay Kumar</strong> M.Sc - Math<br>
                                        </h4>
                                        <p>It was a unique and special experience – something inbetween Science lessons and
                                            holidays. Moreover, I never had such an honest insight into English mentality
                                            and culture. Great!!.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="testimonials-list owl-carousel owl-theme">

                                    <div class="item">
                                        <h4><strong>Amal Prakash</strong> Parent<br>
                                        </h4>
                                        <p>I liked the small number of people attending my course (Creative Teaching). All
                                            the lessons were well-prepared and well-structured. The 2 teachers co-operated
                                            very well with each other and there was always a friendly and encouraging
                                            atmosphere.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Sajjan Pandey</strong> Parent<br>
                                        </h4>
                                        <p>Everybody here is so kind and nice. Thanks a billion for your excellent &amp;
                                            professional work.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Abhiskek</strong> Parent<br>
                                        </h4>
                                        <p>It was incredible, time flew and I can’t wait to be back here with you.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="testimonials-list owl-carousel owl-theme">
                                    <div class="item">
                                        <h4><strong>Sajjan Pandey</strong> <br>
                                        </h4>
                                        <p>It was a unique and special experience – something inbetween Science lessons and
                                            holidays. Moreover, I never had such an honest insight into English mentality
                                            and culture. Great!!.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Abha Mishra</strong> <br>
                                        </h4>
                                        <p>It was incredible, time flew and I can’t wait to be back here with you.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4><strong>Saumya</strong><br>
                                        </h4>
                                        <p>Everybody here is so kind and nice. Thanks a billion for your excellent &amp;
                                            professional work.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('userlayout/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 contactus">

                    <div class="contact-list">
                        <div class="">
                            <div class="contact-icon not">
                                <div class="text-effect">
                                    <span>Notice</span>
                                </div>
                            </div>
                        </div>
                        <marquee onMouseOver="stop()" onMouseOut="start()" direction="down" id="marqueText"
                            scrolldelay="200" behavior="scroll" height="420" style="padding:20px;">


                            <h4>B.A admission notice for the selected candidates. Last date of Admission : 12th Sep 2020.
                            </h4>
                            <p><a href="#">Click for Downloads Notice </a></p>
                            <h4>B.A admission notice for the selected candidates. Last date of Admission : 12th Sep 2020.
                            </h4>
                            <p><a href="#">Click for Downloads Notice </a></p>
                            <h4>B.A admission notice for the selected candidates. Last date of Admission : 12th Sep 2020.
                            </h4>
                            <p><a href="#">Click for Downloads Notice </a></p>
                            <h4>B.A admission notice for the selected candidates. Last date of Admission : 12th Sep 2020.
                            </h4>
                            <p><a href="#">Click for Downloads Notice </a></p>
                    </div>


                    </marquee>

                    <a href="#">View All </a>

                </div>
            </div>

        </div>
    </section>
    <!-- Testimonials End -->
    <!-- Gallery Start -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>College Gallery</span>
            </div>
            {{-- <div class="gal-container">
      <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
        <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#1">
          <div class="caption">
            <h4>Gallery Image1</h4>
            <p>College Image</p>
            <i class="fa fa-search" aria-hidden="true"></i> </div>
          <img src="{{asset('userlayout/images/gallery/1.jpg')}}" alt="Gallery Image"> </a>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body"> <img src="{{asset('userlayout/images/gallery/1.jpg')}}" alt="Gallery Image"> </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
        <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#2">
          <div class="caption">
            <h4>Gallery Image2</h4>
            <p>College Image</p>
            <i class="fa fa-search" aria-hidden="true"></i> </div>
          <img src="images/gallery/2.jpg" alt="Gallery Image"> </a>
          <div class="modal fade" id="2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body"> <img src="{{asset('userlayout/images/gallery/3.jpg')}}" alt="Gallery Image"> </div>
                <div class="col-md-12 description">
                  <h4>This is the second one on my Gallery</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}




            <div class="container">
                <div class="portfolio-item row">
                    <div class="item selfie col-sm-1 col-md-3 col-lg-4"  >
                        <a href="{{asset('userlayout/images/gallery/1.jpg')}}"
                            class="fancylight popup-btn" data-fancybox-group="light">
                            <div class="box1">
                                <img src="{{asset('userlayout/images/gallery/1.jpg')}}" >
                                <div class="box-content1">
                                    <h3 class="title">S.D.G.D. College</h3>
                                    {{-- <span class="post">S.D.G.D. College</span> --}}
                                </div>
                            </div>
                            {{-- <img class="img-fluid pic"
                                src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg"
                                alt="" height="250vh" width="250vw"> --}}
                        </a>

                    </div>
                    <div class="item selfie col-sm-1 col-md-3 col-lg-4"  >
                        <a href="{{asset('userlayout/images/gallery/2.jpg')}}"
                            class="fancylight popup-btn" data-fancybox-group="light">
                            <div class="box1">
                                <img src="{{asset('userlayout/images/gallery/2.jpg')}}" >
                                <div class="box-content1">
                                    <h3 class="title">S.D.G.D. College</h3>
                                    {{-- <span class="post">S.D.G.D. College</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item selfie col-sm-1 col-md-3 col-lg-4"  >
                        <a href="{{asset('userlayout/images/gallery/4.jpg')}}"
                            class="fancylight popup-btn" data-fancybox-group="light">
                            <div class="box1">
                                <img src="{{asset('userlayout/images/gallery/4.jpg')}}" >
                                <div class="box-content1">
                                    <h3 class="title">S.D.G.D. College</h3>
                                    {{-- <span class="post">Web designer</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>











            <div class="text-effect" style="margin-bottom: 20px;">
                <span>Our Associations</span>
            </div>
            <div class="partner-logos">
                <div id="partner-logos" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-1.png') }}" alt="Team1"
                                    title="Team1" /></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-2.png') }}" alt="Team2"
                                    title="Team2" /></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-5.png') }}" alt="Team2"
                                    title="Team2" /></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-6.png') }}" alt="Team2"
                                    title="Team2" /></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-3.png') }}" alt="Team2"
                                    title="Team2" /></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-7.png') }}" alt="Team2"
                                    title="Team2')}}" /></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-bg">
                            <div class="logo"> <img
                                    src="{{ asset('userlayout/images/clients/client-4.png') }}" alt="Team2"
                                    title="Team2" /></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Gallery End -->
@section('script_area')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

    <script>
        $('.portfolio-menu ul li').click(function() {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection
@endsection
