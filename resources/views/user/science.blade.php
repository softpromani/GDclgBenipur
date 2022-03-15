@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Science Department<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Science Department</span>
                </h1>
            </div>
        </div>
    </section>

    <section class="sectop">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 mb-5" data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                    data-aos-duration="2000">


                    <br>


                    <div class="col-sm-12 col-md-7 mb-5">
                        <div class="text-effect" style="margin-bottom: 20px;">
                            <span>Department of Science</span>
                        </div>



                        <p><b>
                                Science </b>is an intellectual activity carried on by humans that is designed to discover
                            information about the natural world in which humans live and to discover the ways in which this
                            information can be organized into meaningful patterns. A primary aim of science is to collect
                            facts (data). An ultimate purpose of science is to discern the order that exists between and
                            amongst the various facts. </p>

                        <p>
                        <ul>
                            <li>The Department has list of senior visiting faculty from other University.
                            </li>
                            <li>Details on student enrichment programmes (special lectures / workshops / seminar) with
                                external experts.
                            </li>
                            <li>
                                Participation in Institutional Social Responsibility(ISR) and Extension activities through
                                NSS and Women's College Samastipur Self Improvement Society. </li>
                            <li>Teaching Methods adopted to improve student learning, Audio visual learning, Objective test
                                methods and Lecture methods</li>
                        </ul>
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-5 pull-right hidden-sm  imgmar">
                        <img src="{{ asset('userlayout/images/science.jpg') }}" alt=".." height="100%" width="100%">
                    </div>
                    <div class="col-sm-12 mb-5" style="margin-top:30px">

                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="background">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox1">
                    <div class="service-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Physics</h3>
                    <p class="description text-left"><b>Eligibility: </b>Intermediate more than 60%</p>
                    <p class="description text-left"><b>Degree Offered: </b>Physics UG (Hons)</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox1 pink">
                    <div class="service-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Chemistry</h3>
                    <p class="description text-left"><b>Eligibility: </b>Intermediate more than 60%</p>
                    <p class="description text-left"><b>Degree Offered: </b>:Chemistry UG (Hons)</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox1 pink">
                    <div class="service-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Mathematics</h3>
                    <p class="description text-left"><b>Eligibility: </b>Intermediate more than 60%</p>
                    <p class="description text-left"><b>Degree Offered: </b>Mathematics UG (Hons)</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox1 pink">
                    <div class="service-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Botany</h3>
                    <p class="description text-left"><b>Eligibility: </b>Intermediate more than 60%</p>
                    <p class="description text-left"><b>Degree Offered: </b>Botany UG (Hons)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox1">
                    <div class="service-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Zoology</h3>
                    <p class="description text-left"><b>Eligibility: </b>Intermediate more than 60%</p>
                    <p class="description text-left"><b>Degree Offered: </b>Zoology UG (Hons)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
