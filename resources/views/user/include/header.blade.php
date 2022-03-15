<header>
    <div class="top-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="header-contact-info">

                        <a href="#"><i class="fa fa-lock"></i> ONLINE ADMISSION & ENQUIRY </a>|
                        <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i> ADMIN </a>|
                        <a href="#"><i class="fa fa-users" aria-hidden="true"></i> GRIEVANCE REDRESSAL</a>
                    </ul>
                </div>
                <div class="col-sm-6 ">
                    <div class="pull-right">
                        <div class="col-lg-10 col-sm-10">
                            <marquee direction="left" style="color:white; font-weight:bold; font-size:15px;"
                                scrollamount="8"><img src="{{ asset('userlayout/images/new.gif') }}" /> B.A admission
                                notice for the selected candidates. Last date of Admission : 12th Sep 2020. </marquee>
                        </div>

                        <div class="col-lg-2 col-sm-2 notice">
                            Notice
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo" style="margin-top: 20px;margin-bottom: 20px;">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="row">
                <img class="img-fluid" style="max-width: 100%;height: auto;" src="{{asset('userlayout/images/header.png')}}" />
            </div>

        </div>

    </div>
    <div class="logo-bar wow fadeInDown text-center" data-offset-top="197" data-spy="affix">
        <div class="container">
            <!-- Logo -->
            <div class="row">

                <div class="col-sm-12">
                    @include('user.include.menu')
                </div>
            </div>
        </div>
    </div>

</header>
